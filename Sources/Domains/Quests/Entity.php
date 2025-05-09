<?php

namespace Liloi\Rune\Domains\Quests;

use Liloi\Tools\Entity as AbstractEntity;
use Liloi\Stylo\Parser;

/**
 * @method string getGoal()
 * @method void setGoal(string $value)
 *
 * @method string getStatus()
 * @method void setStatus(string $value)
 *
 * @method string getData()
 * @method void setData(string $value)
 */
class Entity extends AbstractEntity
{
    public function getKey(): string
    {
        return $this->getField('key_quest');
    }

    public function getStatusTitle(): string
    {
        return Statuses::$list[$this->getStatus()];
    }

    public function save(): void
    {
        Manager::save($this);
    }
}