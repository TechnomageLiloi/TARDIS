<?php

namespace Liloi\TARDIS\Domains\Tickets;

use Liloi\TARDIS\Domains\Manager as DomainManager;
use Liloi\TARDIS\Domains\Maps\Manager as MapsManager;
use Liloi\TARDIS\Domains\Milestones\Manager as MilestonesManager;
use Liloi\TARDIS\Domains\Levels\Manager as LevelsManager;

class Manager extends DomainManager
{
    /**
     * Get table name.
     *
     * @return string
     */
    public static function getTableName(): string
    {
        return self::getTablePrefix() . 'tickets';
    }

    public static function loadCollection(string $keyDay): Collection
    {
        $name = self::getTableName();

        $rows = self::getAdapter()->getArray(sprintf(
            'select * from %s where key_day="%s" and status!="%s" order by key_ticket desc;',
            $name, $keyDay, Statuses::TODO
        ));

        $collection = new Collection();

        foreach($rows as $row)
        {
            $collection[] = Entity::create($row);
        }

        return $collection;
    }

    public static function loadSchedule(string $keyDay): array
    {
        $tickets = self::loadCollection($keyDay);

        $data = [];
        $levels = LevelsManager::getList();

        foreach (array_values($levels) as $value)
        {
            $data[$value] = [];
        }

        /** @var Entity $ticket */
        foreach ($tickets as $ticket)
        {
            $data[$levels[$ticket->getKeyLevel()]][] = $ticket;
        }

        return $data;
    }

    public static function loadScheduleByHours(string $keyDay): array
    {
        $tickets = self::loadCollection($keyDay);

        $data = [];
        $levels = LevelsManager::getList();

//        foreach (array_values($levels) as $value)
//        {
//            $data[$value] = [];
//        }

        for ($i=0;$i<24;$i++)
        {
            $data[sprintf("%02d", $i)] = [];
        }

        /** @var Entity $ticket */
        foreach ($tickets as $ticket)
        {
            $hour = date('H', strtotime($ticket->getKey()));
            $data[sprintf("%02d", $hour)][] = $ticket;
        }

        return $data;
    }

    public static function loadTodos(string $keyMilestone): array
    {
        $name = self::getTableName();

        $rows = self::getAdapter()->getArray(sprintf(
            'select * from %s where key_milestone="%s" and status="%s" order by key_ticket desc;',
            $name, $keyMilestone, Statuses::TODO
        ));

        $tickets = new Collection();

        foreach($rows as $row)
        {
            $tickets[] = Entity::create($row);
        }

        $data = [];
        $levels = LevelsManager::getList();

        foreach (array_values($levels) as $value)
        {
            $data[$value] = [];
        }

        /** @var Entity $ticket */
        foreach ($tickets as $ticket)
        {
            $data[$levels[$ticket->getKeyLevel()]][] = $ticket;
        }

        return $data;
    }

    public static function load(string $key): Entity
    {
        $name = self::getTableName();

        $row = self::getAdapter()->getRow(sprintf(
            'select * from %s where key_ticket="%s"',
            $name,
            $key
        ));

        return Entity::create($row);
    }

    public static function save(Entity $entity): void
    {
        $name = self::getTableName();
        $data = $entity->get();

        // @todo: Get param name from const.
        $key = $data['key_ticket'];
        unset($data['key_ticket']);

        self::getAdapter()->update(
            $name,
            $data,
            sprintf('key_ticket = "%s"', $key)
        );
    }

    // @todo: rise this method to more abstract level.
    public static function create($status = Statuses::TODO): void
    {
        $name = self::getTableName();
        self::getAdapter()->insert($name, [
            'key_ticket' => date('Y-m-d H:i:s'),
            'key_day' => date('Y-m-d'),
            'key_milestone' => MilestonesManager::loadCurrentKey(),
            'key_level' => '1',
            'map' => MapsManager::getMapID(),
            'title' => 'Enter the title',
            'status' => $status,
            'program' => '-',
            'data' => '{}'
        ]);
    }
}