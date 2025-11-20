<?php

namespace Liloi\TARDIS\Domain\Maps;

use Liloi\Stylo\Parser;
use Liloi\Tools\Entity as AbstractEntity;

/**
 * @method string getTitle()
 * @method void setTitle(string $value)
 *
 * @method string getStatus()
 * @method void setStatus(string $value)
 *
 * @method string getType()
 * @method void setType(string $value)
 *
 * @method string getProgram()
 * @method void setProgram(string $value)
 *
 * @method string getData()
 * @method void setData(string $value)
 */
class Entity extends AbstractEntity
{
    public function getKey(): string
    {
        return $this->getField('key_map');
    }

    public function parse(): string
    {
        $program = $this->getProgram();

        $program = preg_replace('/\[(.*?)\]\((.*?)\)/', "<a href='" . ROOT_URL . "$2'>$1</a>", $program);

        return Parser::parseString($program);
    }

    public function save(): void
    {
        Manager::save($this);
    }

    /**
     * Gets status caption.
     *
     * @return string
     */
    public function getStatusTitle(): string
    {
        return Statuses::$list[$this->getStatus()];
    }

    /**
     * Gets type caption.
     *
     * @return string
     */
    public function getTypeTitle(): string
    {
        return Types::$list[$this->getType()];
    }

    public function getPublished(): bool
    {
        return $this->getStatus() == Statuses::PUBLISHED;
    }
}