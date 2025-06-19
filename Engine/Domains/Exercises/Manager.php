<?php

namespace Liloi\TARDIS\Domains\Exercises;

use Liloi\TARDIS\Domains\Manager as DomainManager;
use Liloi\TARDIS\Domains\Maps\Manager as MapsManager;
use Liloi\TARDIS\Exceptions\NotFoundException;

class Manager extends DomainManager
{
    /**
     * Get table name.
     *
     * @return string
     */
    public static function getTableName(): string
    {
        return self::getTablePrefix() . 'exercises';
    }

    public static function loadCollection(): Collection
    {
        $name = self::getTableName();

        $rows = self::getAdapter()->getArray(sprintf(
            'select * from %s where map="%s" order by key_exercise desc;',
            $name, MapsManager::getMapID()
        ));

        $collection = new Collection();

        foreach($rows as $row)
        {
            $collection[$row['key_exercise']] = Entity::create($row);
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
            'select * from %s where map="%s" and key_exercise="%s"',
            $name, MapsManager::getMapID(), $keyQuest
        ));

        if(empty($row))
        {
            throw new NotFoundException();
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
            'select * from %s order by key_exercise desc limit 1', $name
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

        $keyQuest = $data['key_exercise'];

        self::update(
            $name,
            $data,
            sprintf('key_exercise = "%s" and map="%s"', $keyQuest, MapsManager::getMapID())
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
            'select key_exercise from %s where map="%s" order by key_exercise desc limit 1',
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
            'key_exercise' => self::getNextKey(),
            'map' => MapsManager::getMapID(),
            'title' => '-',
            'status' => Statuses::DEVELOP,
            'type' => Types::CARD,
            'program' => '{}',
            'theory' => '-'
        ];

        self::insert($name, $data);
        return Entity::create($data);
    }
}