<?php

namespace Liloi\TARDIS\Domain\Maps;

class Types
{
    public const UNTYPED = 1;
    public const FOLDER = 2;
    public const ARTICLE = 3;

    public static $list = [
        self::UNTYPED => 'Untyped',
        self::FOLDER => 'Folder',
        self::ARTICLE => 'Article',
    ];
}