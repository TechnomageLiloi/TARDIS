<?php

namespace Liloi\TARDIS\API\Schedule\Day;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domains\Schedule\Manager as DiaryManager;
use Liloi\TARDIS\Domains\Tickets\Manager as TicketsManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $entity = DiaryManager::loadCurrent();
        $schedule = TicketsManager::loadScheduleByHours($entity->getKey());

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity,
                'schedule' => $schedule
            ])
        ];
    }
}