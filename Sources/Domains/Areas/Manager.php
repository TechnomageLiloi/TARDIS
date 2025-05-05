<?php

namespace Liloi\BOYARD\Domains\Areas;

use Liloi\BOYARD\Domains\Manager as DomainManager;

class Manager extends DomainManager
{
    public static function getEntityByDirname(string $link): Entity
    {
        $link = rtrim($link, '/');
        $path = ROOT_DIR . $link;

        return Entity::create([
            'link' => $link,
            'path' => $path
        ]);
    }
}