<?php

namespace Liloi\TARDIS\API\Exercises\Show;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domains\Exercises\Manager as ExercisesManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $exercise = ExercisesManager::load($_POST['parameters']['key_exercise']);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $exercise
            ])
        ];
    }
}