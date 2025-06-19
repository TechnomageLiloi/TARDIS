<?php

namespace Liloi\TARDIS\API\Exercises\Save;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domains\Exercises\Manager as ExercisesManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $exercise = ExercisesManager::load($_POST['parameters']['key_exercise']);

        $exercise->setTitle($_POST['parameters']['title']);
        $exercise->setProgram($_POST['parameters']['program']);
        $exercise->setStatus($_POST['parameters']['status']);
        $exercise->setType($_POST['parameters']['type']);
        $exercise->setTheory($_POST['parameters']['theory']);

        $exercise->save();

        return [];
    }
}