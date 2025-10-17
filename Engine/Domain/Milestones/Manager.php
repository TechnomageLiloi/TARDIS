<?php

namespace Liloi\TARDIS\Domain\Milestones;

use Liloi\TARDIS\Domain\Manager as DomainManager;
use Liloi\TARDIS\Domain\Levels\Manager as LevelsManager;

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
            'select * from %s order by key_milestone desc;',
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
     * @param string $keyLevel
     * @return Entity
     */
    public static function load(string $keyLevel): Entity
    {
        $name = self::getTableName();

        $row = self::getAdapter()->getRow(sprintf(
            'select * from %s where key_milestone="%s";',
            $name, $keyLevel
        ));

        if(!$row)
        {
            self::create();
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
        unset($data['key_milestone']);

        self::update($name, $data, sprintf('key_milestone="%s"', $entity->getKey()));
    }

    /**
     * Create new day.
     */
    public static function create(): Entity
    {
        $data = [
            'key_level' => LevelsManager::getHighestLevel(),
            'title' => 'Enter the title',
            'status' => Statuses::TODO,
            'summary' => 'Enter the summary',
            'start' => date('Y-m-d'),
            'finish' => date('Y-m-d', strtotime('+1 year'))
        ];

        self::getAdapter()->insert(self::getTableName(), $data);

        return Entity::create($data);
    }

    public static function getHighestMilestone(): int
    {
        $name = self::getTableName();

        $milestone = self::getAdapter()->getSingle(sprintf(
            'select key_milestone from %s where status="%s" order by key_milestone desc;',
            $name, Statuses::IN_HAND
        ));

        if(!$milestone)
        {
            return 0;
        }

        return $milestone;
    }
}