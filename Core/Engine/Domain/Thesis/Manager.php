<?php

namespace Liloi\Rune\Domain\Thesis;

use Liloi\Rune\Domain\Manager as DomainManager;

class Manager extends DomainManager
{
    static public function getThesis(): Entity
    {
        $data = self::getJson();

        $entity = Entity::create($data);

        return $entity;
    }

    /**
     * @return array|string[]
     */
    public static function getJson(): array
    {
        $url = rtrim($_SERVER['REQUEST_URI'], '/');

        $root = self::getConfig()->get('root');
        $dir = $root . $url;
        $filThesis = $dir . '/Index.json';

        if (file_exists($filThesis)) {
            $data = (array)json_decode(file_get_contents($filThesis));
        } else {
            $data = [
                'title' => 'Enter title'
            ];
        }

        $data['directory'] = $dir;

        if (!isset($data['body'])) {
            $data['body'] = [];
        }
        return $data;
    }

    public static function getBeauty(): string
    {
        $data = self::getJson();

        foreach($data as $key => $value)
        {
            if(!is_string($value))
            {
                continue;
            }

            if(substr($value, 0, 4) === 'http')
            {
                $data[$key] = sprintf('<a href="%s" target="_blank">%s</a>', $value, $value);
            }


        }

        return stripslashes(json_encode($data, JSON_PRETTY_PRINT));
    }
}