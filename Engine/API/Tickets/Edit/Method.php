<?php

namespace Liloi\TARDIS\API\Tickets\Edit;

use Liloi\TARDIS\Domains\Tickets\Manager;
use Liloi\TARDIS\Domains\Tickets\Statuses;
use Liloi\TARDIS\API\Method as AbstractMethod;
use Liloi\TARDIS\Domains\Levels\Manager as LevelsManager;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        $entity = Manager::load($_POST['parameters']['key_ticket']);
        $levels = LevelsManager::getList();

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity,
                'levels' => $levels,
                'statuses' => Statuses::$list,
            ])
        ];
    }
}