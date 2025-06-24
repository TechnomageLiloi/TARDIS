<?php

namespace Liloi\TARDIS\API\Euphoria\Edit;

use Liloi\TARDIS\Domains\Euphoria\Manager as EuphoriaManager;
use Liloi\TARDIS\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        $entity = EuphoriaManager::load($_POST['parameters']['key']);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity
            ])
        ];
    }
}