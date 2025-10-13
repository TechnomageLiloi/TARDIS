<?php

namespace Liloi\BOYARD\API\Milestones\Show;

use Liloi\BOYARD\API\Method as SuperMethod;
use Liloi\BOYARD\Domain\Milestones\Manager as DiaryManager;

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