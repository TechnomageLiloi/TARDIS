<?php

namespace Liloi\BOYARD\Domain\Quests;

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
        return $this->getField('key_quest');
    }

    public function getKeyLevels(): string
    {
        return $this->getField('key_level');
    }

    public function parse(): string
    {
        $program = $this->getSummary();
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