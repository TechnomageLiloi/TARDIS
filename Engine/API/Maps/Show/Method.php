<?php

namespace Liloi\TARDIS\API\Maps\Show;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domains\Maps\Manager as MapsManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $URI = $_SERVER['REQUEST_URI'];
        $root = self::getConfig()['root'];
        $entity = MapsManager::getEntityByDirname($root . $URI);
        $idMap = MapsManager::getMapID();

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity,
                'map' => $idMap,
            ])
        ];
    }
}