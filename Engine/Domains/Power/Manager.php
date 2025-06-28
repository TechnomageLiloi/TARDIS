<?php

namespace Liloi\TARDIS\Domains\Power;

use Liloi\TARDIS\Domains\Manager as DomainManager;

class Manager extends DomainManager
{
    /**
     * Get table name.
     *
     * @return string
     */
    public static function getTableName(): string
    {
        return self::getTablePrefix() . 'power';
    }

    public static function loadCollection(): Collection
    {
        $name = self::getTableName();

        $rows = self::getAdapter()->getArray(sprintf(
            'select * from %s order by key_power desc limit 17;',
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
     * Load problem from database.
     *
     * @param string $keyRoad
     * @return Entity
     */
    public static function load(string $keyRoad): Entity
    {
        $name = self::getTableName();

        $row = self::getAdapter()->getRow(sprintf(
            'select * from %s where key_power="%s"',
            $name,
            $keyRoad
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

        $RID = $data['key_power'];

        self::update(
            $name,
            $data,
            sprintf('key_power = "%s"', $RID)
        );
    }

    /**
     * Create problem in database.
     */
    public static function create(): Entity
    {
        $name = self::getTableName();
        $data = [
            'firstname' => 'Enter first name',
            'fullname' => 'Enter full name',
            'nickname' => 'Enter nickname',
            'degree' => 'Enter degree',
            'type' => '1',
            'summary' => '-',
            'data' => '{}',
            'dt' => date('Y-m-d H:i:s'),
        ];

        self::insert($name, $data);
        return Entity::create($data);
    }
}