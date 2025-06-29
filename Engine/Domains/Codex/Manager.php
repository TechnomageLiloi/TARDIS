<?php

namespace Liloi\TARDIS\Domains\Codex;

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
        return self::getTablePrefix() . 'codex';
    }

    public static function loadCollection(): Collection
    {
        $name = self::getTableName();

        $rows = self::getAdapter()->getArray(sprintf(
            'select * from %s order by key_codex desc limit 17;',
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
     * @param string $keyCodex
     * @return Entity
     */
    public static function load(string $keyCodex): Entity
    {
        $name = self::getTableName();

        $row = self::getAdapter()->getRow(sprintf(
            'select * from %s where key_codex="%s"',
            $name,
            $keyCodex
        ));

        if(!$row)
        {
            return self::create($keyCodex);
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

        $RID = $data['key_codex'];

        self::update(
            $name,
            $data,
            sprintf('key_codex = "%s"', $RID)
        );
    }

    /**
     * Create problem in database.
     */
    public static function create(string $keyCodex): Entity
    {
        $name = self::getTableName();
        $data = [
            'key_codex' => $keyCodex,
            'executed' => '0',
            'title' => 'Enter the title',
            'summary' => '-',
            'data' => '{}'
        ];

        self::insert($name, $data);
        return Entity::create($data);
    }
}