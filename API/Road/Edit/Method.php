<?php

namespace Liloi\TARDIS\API\Road\Edit;

use Liloi\API\Response;
use Liloi\I60\Domains\Tickets\Statuses as LevelsStatuses;
use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domains\Road\Manager as DiaryManager;

/**
 * Rune API: Interstate60.Application.Diary.Edit
 */
class Method extends SuperMethod
{
    public function execute(): array
    {
        $entity = DiaryManager::load($_POST['parameters']['key_day']);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity
            ])
        ];
    }
}