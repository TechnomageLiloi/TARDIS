<?php

namespace Liloi\TARDIS\API\Levels\Edit;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domain\Levels\Manager as DiaryManager;
use Liloi\TARDIS\Domain\Levels\Statuses as LevelsStatuses;

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