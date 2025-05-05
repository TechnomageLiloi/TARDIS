<?php

namespace Liloi\BOYARD\Domains\Areas;

use Liloi\BOYARD\Domains\Manager as DomainManager;

class Manager extends DomainManager
{
    static public function getEntityByDirname(string $path): Entity
    {
        return Entity::create([
            'path' => $path
        ]);
    }
}