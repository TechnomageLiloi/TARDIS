<?php

namespace Liloi\TARDIS\Domains\Tickets;

class Statuses
{
    public const TODO = 0;
    public const ACTIVE = 1;
    public const IN_HAND = 2;
    public const SUCCESS = 3;
    public const FAILURE = 4;

    public static $list = [
        self::TODO => 'To Do',
        self::ACTIVE => 'Active',
        self::IN_HAND => 'In hand',
        self::SUCCESS => 'Success',
        self::FAILURE => 'Failure',
    ];
}