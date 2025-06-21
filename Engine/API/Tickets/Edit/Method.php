<?php

namespace Liloi\TARDIS\API\Tickets\Edit;

use Liloi\TARDIS\Domains\Tickets\Manager;
use Liloi\TARDIS\Domains\Tickets\Statuses;
use Liloi\TARDIS\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        $entity = Manager::load($_POST['parameters']['key_ticket']);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity,
                'statuses' => Statuses::$list,
            ])
        ];
    }
}