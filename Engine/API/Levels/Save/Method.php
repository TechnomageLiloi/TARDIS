<?php

namespace Liloi\BOYARD\API\Levels\Save;

use Liloi\BOYARD\Domains\Levels\Manager;
use Liloi\BOYARD\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        $entity = Manager::load($_POST['parameters']['key']);

        $entity->setTitle($_POST['parameters']['title']);
        $entity->setProgram($_POST['parameters']['program']);
        $entity->setStatus($_POST['parameters']['status']);
        $entity->setGoal($_POST['parameters']['goal']);

        $entity->save();

        return [];
    }
}