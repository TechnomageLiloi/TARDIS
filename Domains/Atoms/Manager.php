<?php

namespace Liloi\TARDIS\Domains\Atoms;

use Liloi\TARDIS\Domains\Manager as DomainManager;
use Liloi\TARDIS\Application;

class Manager extends DomainManager
{
    public static function load(string $URL): Entity
    {
        $link = self::URLToLink($URL);

        return Entity::create([
            'link' => $link,
            'path' => Application::ROOT_DIR . $link
        ]);
    }

    public static function URLToLink(string $URI): string
    {
        $URI = trim($URI, '/');
        $parts = explode('/', $URI);
        array_shift($parts);
        array_shift($parts);
        array_shift($parts);

        $config = self::getConfig();
        $root = $config->get('atoms');

        return $root . '/' . implode('/', $parts);
    }
}