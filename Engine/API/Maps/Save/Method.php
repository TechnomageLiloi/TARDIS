<?php

namespace Liloi\BOYARD\API\Maps\Save;

use Liloi\BOYARD\API\Method as SuperMethod;
use Liloi\BOYARD\Domain\Maps\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $entity = DiaryManager::load($_POST['parameters']['key_quest']);

        $entity->setStatus($_POST['parameters']['status']);
        $entity->setType($_POST['parameters']['type']);
        $entity->setTitle($_POST['parameters']['title']);
        $entity->setData($_POST['parameters']['data']);
        $entity->setProgram($_POST['parameters']['program']);

        $entity->save();

        return [];
    }
}