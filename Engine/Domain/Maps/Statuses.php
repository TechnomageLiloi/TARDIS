<?php

namespace Liloi\TARDIS\Domain\Maps;

class Statuses
{
    public const DEVELOPMENT = 1;
    public const PERSONAL = 2;
    public const PUBLISHED = 3;

    public static $list = [
        self::DEVELOPMENT => 'Development',
        self::PERSONAL => 'Personal',
        self::PUBLISHED => 'Published'
    ];
}