<?php

namespace Liloi\TARDIS\API\Milestones\Edit;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domain\Milestones\Manager as DiaryManager;
use Liloi\TARDIS\Domain\Milestones\Statuses as MilestonesStatuses;

/**
 * Rune API: Interstate60.Application.Diary.Edit
 */
class Method extends SuperMethod
{
    public function execute(): array
    {
        $entity = DiaryManager::load($_POST['parameters']['key_milestone']);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity,
                'statuses' => MilestonesStatuses::$list
            ])
        ];
    }
}