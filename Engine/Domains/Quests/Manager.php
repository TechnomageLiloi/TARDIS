<?php

namespace Liloi\TARDIS\Domains\Quests;

use Liloi\TARDIS\Domains\Manager as DomainManager;
use Liloi\TARDIS\Domains\Maps\Manager as MapsManager;

class Manager extends DomainManager
{
    /**
     * Get table name.
     *
     * @return string
     */
    public static function getTableName(): string
    {
        return self::getTablePrefix() . 'quests';
    }

    public static function loadCollection(): Collection
    {
        $name = self::getTableName();

        $rows = self::getAdapter()->getArray(sprintf(
            'select * from %s where map="%s" order by key_quest desc;',
            $name, MapsManager::getMapID()
        ));

        $collection = new Collection();

        foreach($rows as $row)
        {
            $collection[$row['key_quest']] = Entity::create($row);
        }

        return $collection;
    }

    /**
     * Load problem from database.
     *
     * @param string $keyQuest
     * @return Entity
     */
    public static function load(string $keyQuest): Entity
    {
        $name = self::getTableName();

        $row = self::getAdapter()->getRow(sprintf(
            'select * from %s where key_quest="%s"',
            $name,
            $keyQuest
        ));

        if(empty($row))
        {
            return self::create($keyQuest);
        }

        return Entity::create($row);
    }

    /**
     * Load current quest.
     *
     * @return Entity
     */
    public static function loadCurrent(): Entity
    {
        $name = self::getTableName();

        $row = self::getAdapter()->getRow(sprintf(
            'select * from %s order by key_quest desc limit 1', $name
        ));

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

        $keyQuest = $data['key_quest'];

        self::update(
            $name,
            $data,
            sprintf('key_quest = "%s"', $keyQuest)
        );
    }

    /**
     * Load next key.
     *
     * @return int
     */
    public static function getNextKey(): int
    {
        $name = self::getTableName();

        $key = (int)self::getAdapter()->getSingle(sprintf(
            'select key_quest from %s where map="%s" order by key_quest desc limit 1',
            $name, MapsManager::getMapID()
        ));

        return ++$key;
    }

    /**
     * Create problem in database.
     */
    public static function create(): Entity
    {
        $name = self::getTableName();
        $data = [
            'key_quest' => self::getNextKey(),
            'map' => MapsManager::getMapID(),
            'title' => '-',
            'program' => '-',
            'status' => Statuses::TODO,
            'start' => date('Y-m-d H:i:s'),
            'finish' => date('Y-m-d H:i:s'),
            'tags' => '-',
            'data' => '{}'
        ];

        self::insert($name, $data);
        return Entity::create($data);
    }
}