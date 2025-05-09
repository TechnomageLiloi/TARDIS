<?php

namespace Liloi\Rune\Domains\Stones;

use Liloi\TARDIS\Domains\Manager as DomainManager;
use Liloi\TARDIS\Application;

class Manager extends DomainManager
{
    /**
     * Get table name.
     *
     * @return string
     */
    public static function getTableName(): string
    {
        return self::getTablePrefix() . 'stones';
    }

    public static function loadCollection(): Collection
    {
        $name = self::getTableName();

        $rows = self::getAdapter()->getArray(sprintf(
            'select * from %s where key_quest like "%s-%%" order by key_quest desc;',
            $name, date('Y-W')
        ));

        $collection = new Collection();

        foreach($rows as $row)
        {
            $collection[] = Entity::create($row);
        }

        return $collection;
    }

    /**
     * Load problem from database.
     *
     * @param string $keyRoad
     * @return Entity
     */
    public static function load(string $keyRoad): Entity
    {
        $name = self::getTableName();

        $row = self::getAdapter()->getRow(sprintf(
            'select * from %s where key_stone="%s"',
            $name,
            $keyRoad
        ));

        if(empty($row))
        {
            return self::create($keyRoad);
        }

        return Entity::create($row);
    }

    /**
     * Save problem to database.
     *
     * @param Entity $entity
     */
    public static function save(Entity $entity): void
    {
        $name = self::getTableName();
        $data = $entity->get();

        $RID = $data['key_stone'];

        self::update(
            $name,
            $data,
            sprintf('key_stone = "%s"', $RID)
        );
    }

    /**
     * Create problem in database.
     */
    public static function create(string $keyQuest): Entity
    {
        $name = self::getTableName();
        $data = [
            'key_stone' => date('Y-m-d H:i:s'),
            'key_quest' => $keyQuest,
            'title' => '-'
        ];

        self::insert($name, $data);
        return Entity::create($data);
    }
}