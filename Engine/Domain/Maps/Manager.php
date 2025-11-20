<?php

namespace Liloi\TARDIS\Domain\Maps;

use Liloi\TARDIS\Domain\Manager as DomainManager;

class Manager extends DomainManager
{
    /**
     * Get table name.
     *
     * @return string
     */
    public static function getTableName(): string
    {
        return self::getTablePrefix() . 'maps';
    }

    public static function loadCollection(): Collection
    {
        $name = self::getTableName();

        $rows = self::getAdapter()->getArray(sprintf(
            'select * from %s order by key_map desc limit 17;',
            $name
        ));

        $collection = new Collection();

        foreach($rows as $row)
        {
            $collection[] = Entity::create($row);
        }

        return $collection;
    }

    /**
     * Load day by key.
     *
     * @param string $keyMap
     * @return Entity
     */
    public static function load(string $keyMap): Entity
    {
        $name = self::getTableName();

        $row = self::getAdapter()->getRow(sprintf(
            'select * from %s where key_map="%s";',
            $name, $keyMap
        ));

        if(!$row)
        {
            if($_SESSION['admin'])
            {
                return self::create($keyMap);
            }
            else
            {
                throw new \Exception('Page not found.');
            }
        }

        return Entity::create($row);
    }

    /**
     * Save day.
     *
     * @param Entity $entity
     */
    public static function save(Entity $entity): void
    {
        $name = self::getTableName();
        $data = $entity->get();
        unset($data['key_map']);

        self::update($name, $data, sprintf('key_map="%s"', $entity->getKey()));
    }

    /**
     * Create new day.
     */
    public static function create(string $keyMap): Entity
    {
        $data = [
            'key_map' => $keyMap,
            'title' => 'Enter the title',
            'status' => Statuses::DEVELOPMENT,
            'type' => Types::UNTYPED,
            'program' => '',
            'data' => '{}'
        ];

        self::getAdapter()->insert(self::getTableName(), $data);

        return Entity::create($data);
    }

    public static function getMapID(): string
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = str_replace(ROOT_URL, '', $url);
        $URI = rtrim($url, '/');

        if(empty($URI))
        {
            return ':';
        }

        return str_replace('/', ':', $URI);
    }

    public static function getIDToPath(string $ID): string
    {
        return str_replace(':', '/', $ID);
    }
}