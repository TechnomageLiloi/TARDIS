<?php

namespace Liloi\UMKLAIDET\Domain\Maps;

class Types
{
    public const INSTITUTE = 0;
    public const UNTYPED = 1;

    public static $list = [
        self::INSTITUTE => 'Institute',
        self::UNTYPED => 'Untyped',
    ];
}