<?php

namespace Liloi\BOYARD\API\Maps\Show;

use Liloi\BOYARD\API\Method as SuperMethod;
use Liloi\BOYARD\Domains\Maps\Manager as MapsManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $URI = $_SERVER['REQUEST_URI'];
        $root = self::getConfig()['root'];
        $entity = MapsManager::getEntityByDirname($root . $URI);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity,
            ])
        ];
    }
}