<?php

namespace Liloi\Rune\API\Quests\Schedule;

use Liloi\Rune\API\Method as SuperMethod;
use Liloi\Rune\Domain\Quests\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $quests = DiaryManager::loadCollection();
        $schedule = DiaryManager::loadSchedule();

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'schedule' => $schedule,
                'quests' => $quests
            ])
        ];
    }
}