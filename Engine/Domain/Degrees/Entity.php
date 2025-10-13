<?php

namespace Liloi\BOYARD\Domain\Degrees;

use Liloi\Stylo\Parser;
use Liloi\Tools\Entity as AbstractEntity;

/**
 * @method string getTitle()
 * @method void setTitle(string $value)
 *
 * @method string getStatus()
 * @method void setStatus(string $value)
 *
 * @method string getSummary()
 * @method void setSummary(string $value)
 *
 * @method string getStart()
 * @method void setStart(string $value)
 *
 * @method string getFinish()
 * @method void setFinish(string $value)
 */
class Entity extends AbstractEntity
{
    public function getKey(): string
    {
        return $this->getField('key_degree');
    }

    public function parse(): string
    {
        $program = $this->getSummary();

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
}