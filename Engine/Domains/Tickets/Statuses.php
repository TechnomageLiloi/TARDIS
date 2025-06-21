<?php

namespace Liloi\TARDIS\Domains\Tickets;

class Statuses
{
    public const IN_HAND = 1;
    public const SUCCESS = 2;
    public const FAILURE = 3;

    public static $list = [
        self::IN_HAND => 'In hand',
        self::SUCCESS => 'Success',
        self::FAILURE => 'Failure',
    ];
}