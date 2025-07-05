<?php

namespace Liloi\TARDIS\API\Milestones\Show;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domains\Milestones\Manager as MilestonesManager;
use Liloi\TARDIS\Domains\Tickets\Manager as TicketsManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $entity = MilestonesManager::loadCurrent();
        $todos = TicketsManager::loadTodos($entity->getKey());

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity,
                'todos' => $todos
            ])
        ];
    }
}