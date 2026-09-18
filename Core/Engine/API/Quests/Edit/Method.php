<?php

namespace Liloi\Rune\API\Quests\Edit;

use Liloi\Rune\API\Method as SuperMethod;
use Liloi\Rune\Domain\Quests\Manager as DiaryManager;
use Liloi\Rune\Domain\Quests\Statuses as DiaryStatuses;
use Liloi\Rune\Domain\Quests\Types as DiaryTypes;

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
                'statuses' => DiaryStatuses::$list,
                'types' => DiaryTypes::$list
            ])
        ];
    }
}