<?php

namespace Liloi\UMKLAIDET\API\Milestones\Edit;

use Liloi\UMKLAIDET\API\Method as SuperMethod;
use Liloi\UMKLAIDET\Domain\Milestones\Manager as DiaryManager;
use Liloi\UMKLAIDET\Domain\Milestones\Statuses as MilestonesStatuses;

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