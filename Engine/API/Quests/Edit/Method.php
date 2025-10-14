<?php

namespace Liloi\UMKLAIDET\API\Quests\Edit;

use Liloi\UMKLAIDET\API\Method as SuperMethod;
use Liloi\UMKLAIDET\Domain\Quests\Manager as DiaryManager;
use Liloi\UMKLAIDET\Domain\Quests\Statuses as QuestsStatuses;

/**
 * Rune API: Interstate60.Application.Diary.Edit
 */
class Method extends SuperMethod
{
    public function execute(): array
    {
        $entity = DiaryManager::load($_POST['parameters']['key_quest']);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity,
                'statuses' => QuestsStatuses::$list
            ])
        ];
    }
}