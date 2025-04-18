<?php

namespace Liloi\Rune\Domain\Atoms;

use Liloi\TARDIS\Domains\Manager as DomainManager;

class Manager extends DomainManager
{
    public static function load(string $URL): Entity
    {
        $link = self::URLToLink($URL);

        return Entity::create([
            'link' => $link,
            'path' => ROOT_DIR . '/Root' . $link
        ]);
    }

    public static function URLToLink(string $URL): string
    {
        $link = '/' . trim($URL, '/');
        return $link;
    }
}