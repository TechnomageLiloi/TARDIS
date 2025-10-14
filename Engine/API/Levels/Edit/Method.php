<?php

namespace Liloi\UMKLAIDET\API\Levels\Edit;

use Liloi\UMKLAIDET\API\Method as SuperMethod;
use Liloi\UMKLAIDET\Domain\Levels\Manager as DiaryManager;
use Liloi\UMKLAIDET\Domain\Levels\Statuses as LevelsStatuses;

/**
 * Rune API: Interstate60.Application.Diary.Edit
 */
class Method extends SuperMethod
{
    public function execute(): array
    {
        $entity = DiaryManager::load($_POST['parameters']['key_level']);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity,
                'statuses' => LevelsStatuses::$list
            ])
        ];
    }
}