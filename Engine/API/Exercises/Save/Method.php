<?php

namespace Liloi\TARDIS\API\Exercises\Save;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domains\Exercises\Manager as ExercisesManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $quest = ExercisesManager::load($_POST['parameters']['keyQuest']);

        $quest->setTitle($_POST['parameters']['title']);
        $quest->setProgram($_POST['parameters']['program']);
        $quest->setStatus($_POST['parameters']['status']);
        $quest->setType($_POST['parameters']['type']);
        $quest->setTheory($_POST['parameters']['theory']);

        $quest->save();

        return [];
    }
}