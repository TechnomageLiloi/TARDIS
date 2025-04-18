<?php

namespace Liloi\TARDIS\API\Atoms\Show;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domains\Atoms\Manager as AtomsManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $entity = AtomsManager::load($_SERVER['REQUEST_URI']);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity
            ])
        ];
    }
}