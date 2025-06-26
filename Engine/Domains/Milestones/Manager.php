<?php

namespace Liloi\TARDIS\Domains\Milestones;

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
        return self::getTablePrefix() . 'milestones';
    }

    public static function loadCollection(): Collection
    {
        $name = self::getTableName();

        $rows = self::getAdapter()->getArray(sprintf(
            'select * from %s order by key_milestone desc limit 17;',
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
     * @param string $keyDay
     * @return Entity
     */
    public static function load(string $keyDay): Entity
    {
        $name = self::getTableName();

        $row = self::getAdapter()->getRow(sprintf(
            'select * from %s where key_milestone="%s";',
            $name, $keyDay
        ));

        return Entity::create($row);
    }

    /**
     * Load current day.
     *
     * @return Entity
     */
    public static function loadCurrent(): Entity
    {
        $name = self::getTableName();

        $row = self::getAdapter()->getRow(sprintf(
            'select * from %s order by key_milestone desc;',
            $name
        ));

        return Entity::create($row);
    }

    /**
     * Load current milestone key.
     *
     * @return string
     */
    public static function loadCurrentKey(): string
    {
        $name = self::getTableName();

        return (string)self::getAdapter()->getSingle(sprintf(
            'select key_milestone from %s order by key_milestone desc limit 1;',
            $name
        ));
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
        unset($data['key_milestone']);

        self::update($name, $data, sprintf('key_milestone="%s"', $entity->getKey()));
    }

    /**
     * Create new day.
     */
    public static function create(): Entity
    {
        $data = [
            'program' => '-',
            'data' => '{}'
        ];

        self::getAdapter()->insert(self::getTableName(), $data);

        return Entity::create($data);
    }
}