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

    public static function getItems(Entity $entity): array
    {
        $files = [];

        $root = self::getConfig()->get('root');

        $areaLink = $entity->getLink();
        $areaPath = $entity->getPath();
        $names = scandir($areaPath);

        foreach ($names as $name)
        {
            if(in_array($name, ['.', '..']))
            {
                continue;
            }

            $path = $areaPath . '/' . $name;

            if(is_dir($path))
            {
                $link = str_replace($root, '', $areaLink . '/' . $name);
            }
            else
            {
                $link = $areaLink . '/' . $name;
            }

            $files[] = [
                'name' => $name,
                'link' => $link,
            ];
        }

        return $files;
    }
}