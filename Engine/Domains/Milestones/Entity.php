<?php

namespace Liloi\TARDIS\Domains\Milestones;

use Liloi\Stylo\Parser;
use Liloi\Tools\Entity as AbstractEntity;

/**
 * @method string getMap()
 * @method void setMap(string $value)
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
        return $this->getField('key_milestone');
    }

    public function getID(): string
    {
        return sprintf("%03x", $this->getKey());
    }

    public function parse(): string
    {
        return Parser::parseString($this->getProgram());
    }

    public function save(): void
    {
        Manager::save($this);
    }

    public function getStep(): string
    {
        return $this->getKey();
    }
}