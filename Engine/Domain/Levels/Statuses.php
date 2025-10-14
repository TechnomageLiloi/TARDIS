<?php

namespace Liloi\UMKLAIDET\Domain\Levels;

class Statuses
{
    public const TODO = 1;
    public const IN_HAND = 2;
    public const DEFENDED = 3;

    public static $list = [
        self::TODO => 'To Do',
        self::IN_HAND => 'In hand',
        self::DEFENDED => 'Defended',
    ];
}