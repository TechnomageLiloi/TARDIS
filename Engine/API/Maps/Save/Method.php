<?php

namespace Liloi\UMKLAIDET\API\Maps\Save;

use Liloi\UMKLAIDET\API\Method as SuperMethod;
use Liloi\UMKLAIDET\Domain\Maps\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $entity = DiaryManager::load($_POST['parameters']['key_quest']);

        $entity->setStatus($_POST['parameters']['status']);
        $entity->setStart($_POST['parameters']['start']);
        $entity->setFinish($_POST['parameters']['finish']);
        $entity->setData($_POST['parameters']['data']);
        $entity->setProgram($_POST['parameters']['program']);
        $entity->setTeacher($_POST['parameters']['teacher']);

        $entity->save();

        return [];
    }
}