<?php

namespace Liloi\Rune\Domain\Atoms;

use Liloi\Tools\Entity as AbstractEntity;
use Liloi\Stylo\Parser;

/**
 * Wiki's entity.
 *
 * @method string getPath()
 * @method void setPath(string $value)
 */
class Entity extends AbstractEntity
{
    public function getParse(): string
    {
        return Parser::parseString(file_get_contents($this->getPath() . '/Index.md'));
    }
}