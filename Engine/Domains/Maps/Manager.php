<?php

namespace Liloi\TARDIS\Domains\Maps;

use Liloi\TARDIS\Domains\Manager as DomainManager;

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

    public static function getItems(Entity $entity): array
    {
        $files = [];

        $root = self::getConfig()->get('root');

        $mapLink = $entity->getLink();
        $mapPath = $entity->getPath();
        $names = scandir($mapPath);

        foreach ($names as $name)
        {
            if(in_array($name, ['.', '..']))
            {
                continue;
            }

            $path = $mapPath . '/' . $name;

            if(is_dir($path))
            {
                $link = str_replace($root, '', $mapLink . '/' . $name);
            }
            else
            {
                $link = $mapLink . '/' . $name;
            }

            $files[] = [
                'name' => $name,
                'link' => $link,
            ];
        }

        return $files;
    }
}