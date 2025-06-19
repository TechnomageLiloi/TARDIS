<?php

namespace Liloi\TARDIS\API\Exercises\Create;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domains\Exercises\Manager as ExercisesManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        ExercisesManager::create();
        return [];
    }
}