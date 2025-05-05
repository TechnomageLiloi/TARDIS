<?php

namespace Liloi\BOYARD\Domains\Areas;

use Liloi\Tools\Entity as AbstractEntity;
use Liloi\Stylo\Parser;

/**
 * @method string getPath()
 * @method void setPath(string $value)
 *
 * @todo: add tests
 */
class Entity extends AbstractEntity
{
    public function getItems(): array
    {
        $files = scandir($this->getPath());

        return $files;
    }
}