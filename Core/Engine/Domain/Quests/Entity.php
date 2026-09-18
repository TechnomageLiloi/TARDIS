<?php

namespace Liloi\Rune\Domain\Quests;

use Liloi\Stylo\Parser;
use Liloi\Tools\Entity as AbstractEntity;

/**
 * @method string getStart()
 * @method void setStart(string $value)
 *
 * @method string getTitle()
 * @method void setTitle(string $value)
 *
 * @method string getQuest()
 * @method void setQuest(string $value)
 *
 * @method string getStatus()
 * @method void setStatus(string $value)
 *
 * @method string getType()
 * @method void setType(string $value)
 *
 * @method string getData()
 * @method void setData(string $value)
 *
 * @method string getMark()
 * @method void setMark(string $value)
 */
class Entity extends AbstractEntity
{
    public function getKeyQuest(): string
    {
        return $this->getField('key_quest');
    }

    public function save(): void
    {
        Manager::save($this);
    }

    public function getClass(): string
    {
        return strtolower(str_replace(' ', '-', Statuses::$list[$this->getStatus()]));
    }

    public function getUID(): string
    {
        return sprintf('%07s', base_convert($this->getKeyQuest(), 10, 36));
    }

    public function getHour(): int
    {
        return date('H', strtotime($this->getStart()));
    }
}