<?php

namespace Liloi\UMKLAIDET\API\Maps\Edit;

use Liloi\UMKLAIDET\API\Method as SuperMethod;
use Liloi\UMKLAIDET\Domain\Maps\Manager as DiaryManager;
use Liloi\UMKLAIDET\Domain\Maps\Statuses as MapsStatuses;

/**
 * Rune API: Interstate60.Application.Diary.Edit
 */
class Method extends SuperMethod
{
    public function execute(): array
    {
        $entity = DiaryManager::load($_POST['parameters']['key_step']);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity,
                'statuses' => MapsStatuses::$list
            ])
        ];
    }
}