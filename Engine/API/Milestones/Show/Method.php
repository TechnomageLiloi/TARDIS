<?php

namespace Liloi\TARDIS\API\Milestones\Show;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domain\Milestones\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        //
        $entity = DiaryManager::load($_POST['parameters']['key_milestone']);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity
            ])
        ];
    }
}