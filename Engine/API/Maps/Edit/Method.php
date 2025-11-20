<?php

namespace Liloi\TARDIS\API\Maps\Edit;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domain\Maps\Manager as DiaryManager;
use Liloi\TARDIS\Domain\Maps\Statuses as MapsStatuses;
use Liloi\TARDIS\Domain\Maps\Types as MapsTypes;

/**
 * Rune API: TARDIS.Application.Diary.Edit
 */
class Method extends SuperMethod
{
    public function execute(): array
    {
        $this->checkAccess();
        $entity = DiaryManager::load($_POST['parameters']['key_step']);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity,
                'statuses' => MapsStatuses::$list,
                'types' => MapsTypes::$list
            ])
        ];
    }
}