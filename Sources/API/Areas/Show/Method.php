<?php

namespace Liloi\BOYARD\API\Areas\Show;

use Liloi\BOYARD\API\Method as SuperMethod;
use Liloi\BOYARD\Domains\Areas\Manager as AreasManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $root = self::getConfig()['root'];
        $entity = AreasManager::getEntityByDirname(ROOT_DIR . $root . $_SERVER['REQUEST_URI']);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity,
            ])
        ];
    }
}