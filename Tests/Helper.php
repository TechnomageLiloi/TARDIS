<?php

namespace Liloi\TARDIS;

use Liloi\Config\Pool;
use Liloi\Config\Sparkle;
use PHPUnit\Framework\TestCase;

/**
 * Check phpUnit testing ability.
 */
class Helper
{
    public static function truncateDatabase(): void
    {
        $prefix = 'tardis_';
        $tables = [
            $prefix . 'road',
            $prefix . 'config',
            $prefix . 'logs'
        ];
        $connection = Pool::getSingleton()->get('connection');
        $db = \mysqli_connect(
            $connection['host'],
            $connection['user'],
            $connection['password'],
            $connection['database'],
        );

        foreach ($tables as $table)
        {
            $db->query(sprintf('truncate table %s', $table));
        }
    }
}