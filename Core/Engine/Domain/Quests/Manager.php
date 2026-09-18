<?php

namespace Liloi\Rune\Domain\Quests;

use Liloi\Rune\Domain\Manager as DomainManager;

class Manager extends DomainManager
{
    /**
     * Gets table name.
     *
     * @return string
     */
    public static function getTableName(): string
    {
        return 'quests';
    }

    /**
     * Gets undone quests collection.
     *
     * @return Collection
     */
    public static function loadCollection(): Collection
    {
        $name = self::getTableName();

        $rows = self::getAdapter()->getArray(sprintf(
            'select * from %s where status in ("%s", "%s") order by start desc;',
            $name, Statuses::TODO, Statuses::IN_HAND
        ));

        $collection = new Collection();

        foreach($rows as $row)
        {
            $collection[(int)$row['key_quest']] = Entity::create($row);
        }

        return $collection;
    }

    /**
     * Gets schedule format.
     *
     * @return array
     */
    public static function loadSchedule(): array
    {
        $name = self::getTableName();

        $rows = self::getAdapter()->getArray(sprintf(
            'select * from %s where status in ("%s", "%s", "%s") and start between "%s 00:00:00" and "%s 23:59:59" order by start desc;',
            $name, Statuses::COMPLETE, Statuses::IN_HAND, Statuses::FAILURE, date('Y-m-d'), date('Y-m-d')
        ));

        $collection = new Collection();

        foreach($rows as $row)
        {
            $collection[(int)$row['key_quest']] = Entity::create($row);
        }

        $schedule = [];

        for($i = 0; $i < 24; $i++)
        {
            $schedule[$i] = [];
        }

        /** @var Entity $entity */
        foreach ($collection as $entity)
        {
            $schedule[$entity->getHour()][] = $entity;
        }

        return $schedule;
    }

    public static function load(string $key_quest): Entity
    {
        $name = self::getTableName();

        $row = self::getAdapter()->getRow(sprintf(
            'select * from %s where key_quest="%s";',
            $name, $key_quest
        ));

        if(!$row)
        {
            throw new \Exception('Page not found.');
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

        self::update($name, $data, sprintf('key_quest="%s"', $data['key_quest']));
    }

    /**
     * Create new day.
     */
    public static function create(): Entity
    {
        $data = [
            'start' => date('Y-m-d H:i:s'),
            'title' => 'Enter the title',
            'quest' => '-',
            'status' => Statuses::TODO,
            'type' => Types::SIMPLE,
            'data' => '{}',
            'mark' => '1'
        ];

        self::getAdapter()->insert(self::getTableName(), $data);

        return Entity::create($data);
    }
}