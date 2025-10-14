<?php

namespace Liloi\BOYARD\API\Quests\Edit;

use Liloi\BOYARD\API\Method as SuperMethod;
use Liloi\BOYARD\Domain\Quests\Manager as DiaryManager;
use Liloi\BOYARD\Domain\Quests\Statuses as QuestsStatuses;

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