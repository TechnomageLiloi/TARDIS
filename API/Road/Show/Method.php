<?php

namespace Liloi\TARDIS\API\Road\Show;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domains\Road\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $URI = $_SERVER['REQUEST_URI'];
        $key = str_replace('/', '-', trim($URI, '/'));

        $entity = DiaryManager::load($key);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity
            ])
        ];
    }
}