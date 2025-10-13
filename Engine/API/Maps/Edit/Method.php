<?php

namespace Liloi\BOYARD\API\Maps\Edit;

use Liloi\BOYARD\API\Method as SuperMethod;
use Liloi\BOYARD\Domain\Maps\Manager as DiaryManager;
use Liloi\BOYARD\Domain\Maps\Statuses as MapsStatuses;
use Liloi\BOYARD\Domain\Maps\Types as MapsTypes;

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
                'statuses' => MapsStatuses::$list,
                'types' => MapsTypes::$list
            ])
        ];
    }
}