<?php

namespace Liloi\Rune\Domain\Quests;

class Statuses
{
    public const TODO = 1;
    public const IN_HAND = 2;
    public const COMPLETE = 3;

    public static $list = [
        self::TODO => 'To do',
        self::IN_HAND => 'In hand',
        self::COMPLETE => 'Complete'
    ];
}