<?php

namespace Liloi\UMKLAIDET\Domain\Degrees;

use Liloi\UMKLAIDET\Domain\Manager as DomainManager;

class Manager extends DomainManager
{
    /**
     * Get table name.
     *
     * @return string
     */
    public static function getTableName(): string
    {
        return self::getTablePrefix() . 'degrees';
    }

    public static function loadCollection(): Collection
    {
        $name = self::getTableName();

        $rows = self::getAdapter()->getArray(sprintf(
            'select * from %s order by key_degree desc limit 17;',
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
     * @param string $keyDegree
     * @return Entity
     */
    public static function load(string $keyDegree): Entity
    {
        $name = self::getTableName();

        $row = self::getAdapter()->getRow(sprintf(
            'select * from %s where key_degree="%s";',
            $name, $keyDegree
        ));

        if(!$row)
        {
            self::create($keyDegree);
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
        unset($data['key_degree']);

        self::update($name, $data, sprintf('key_degree="%s"', $entity->getKey()));
    }

    /**
     * Create new day.
     */
    public static function create(): Entity
    {
        $data = [
            'title' => 'Enter the title',
            'status' => Statuses::TODO,
            'summary' => 'Enter the summary',
            'start' => date('Y-m-d'),
            'finish' => date('Y-m-d', strtotime('+1 year'))
        ];

        self::getAdapter()->insert(self::getTableName(), $data);

        return Entity::create($data);
    }
}