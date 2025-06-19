<?php

namespace Liloi\TARDIS\Domains\Exercises;

use Liloi\Tools\Entity as AbstractEntity;
use Liloi\Stylo\Parser as StyloParser;

/**
 * @method string getMap()
 * @method void setMap(string $value)
 *
 * @method string getTitle()
 * @method void setTitle(string $value)
 *
 * @method string getProgram()
 * @method void setProgram(string $value)
 *
 * @method string getStatus()
 * @method void setStatus(string $value)
 *
 * @method string getType()
 * @method void setType(string $value)
 *
 * @method string getTheory()
 * @method void setTheory(string $value)
 */
class Entity extends AbstractEntity
{
    public function getKey(): string
    {
        return $this->getField('key_exercise');
    }

    public function getID(): string
    {
        return sprintf("%s:%03x", $this->getMap(), $this->getKey());
    }

    public function getStatusTitle(): string
    {
        return Statuses::$list[$this->getStatus()];
    }

    public function getTypeTitle(): string
    {
        return Types::$list[$this->getType()];
    }

    public function getProgramParse(): string
    {
        return StyloParser::parseString($this->getProgram());
    }

    public function save(): void
    {
        Manager::save($this);
    }
}