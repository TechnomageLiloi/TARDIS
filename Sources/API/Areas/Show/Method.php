<?php

namespace Liloi\Rune\API\Areas\Show;

use Liloi\Rune\API\Method as SuperMethod;
use Liloi\Rune\Domains\Areas\Manager as AreasManager;
//use Liloi\Rune\Domains\Config\Keys as ConfigKeys;
//use Liloi\Rune\Domains\Config\Manager as ConfigManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $URI = $_SERVER['REQUEST_URI'];

//        ConfigManager::load(ConfigKeys::CURRENT)->setString($URI)->save();
        $root = self::getConfig()['root'];
        $entity = AreasManager::getEntityByDirname($root . $URI);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity,
            ])
        ];
    }
}