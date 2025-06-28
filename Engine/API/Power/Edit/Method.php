<?php

namespace Liloi\TARDIS\API\Power\Edit;

use Liloi\TARDIS\Domains\Power\Manager as PowerManager;
use Liloi\TARDIS\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        $entity = PowerManager::load($_POST['parameters']['key']);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity
            ])
        ];
    }
}