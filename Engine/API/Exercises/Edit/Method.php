<?php

namespace Liloi\TARDIS\API\Exercises\Edit;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domains\Exercises\Manager as ExercisesManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $quest = ExercisesManager::load($_POST['parameters']['keyQuest']);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'quest' => $quest
            ])
        ];
    }
}