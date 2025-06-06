<?php

namespace Liloi\TARDIS\API\Levels\Edit;

use Liloi\TARDIS\Domains\Levels\Manager;
use Liloi\TARDIS\Domains\Levels\Statuses;
use Liloi\TARDIS\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        $entity = Manager::load($_POST['parameters']['key']);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity,
                'statuses' => Statuses::$list,
            ])
        ];
    }
}