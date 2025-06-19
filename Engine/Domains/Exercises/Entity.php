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
 * @method string getStart()
 * @method void setStart(string $value)
 *
 * @method string getFinish()
 * @method void setFinish(string $value)
 *
 * @method string getTags()
 * @method void setTags(string $value)
 *
 * @method string getData()
 * @method void setData(string $value)
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

    public function getProgramParse(): string
    {
        return StyloParser::parseString($this->getProgram());
    }

    public function save(): void
    {
        Manager::save($this);
    }
}