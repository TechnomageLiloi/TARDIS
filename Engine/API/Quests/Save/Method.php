<?php

namespace Liloi\UMKLAIDET\API\Quests\Save;

use Liloi\UMKLAIDET\API\Method as SuperMethod;
use Liloi\UMKLAIDET\Domain\Quests\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $entity = DiaryManager::load($_POST['parameters']['key_quest']);

        $entity->setStatus($_POST['parameters']['status']);
        $entity->setSummary($_POST['parameters']['summary']);
        $entity->setTitle($_POST['parameters']['title']);
        $entity->setData($_POST['parameters']['data']);

        $entity->save();

        return [];
    }
}