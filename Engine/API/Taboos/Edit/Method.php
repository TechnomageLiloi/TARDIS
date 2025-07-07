<?php

namespace Liloi\TARDIS\API\Taboos\Edit;

use Liloi\TARDIS\Domains\Taboos\Manager as TaboosManager;
use Liloi\TARDIS\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        $entity = TaboosManager::load($_POST['parameters']['key']);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity
            ])
        ];
    }
}