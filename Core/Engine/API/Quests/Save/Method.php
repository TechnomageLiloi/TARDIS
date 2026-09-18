<?php

namespace Liloi\Rune\API\Quests\Save;

use Liloi\Rune\API\Method as SuperMethod;
use Liloi\Rune\Domain\Quests\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $entity = DiaryManager::load($_POST['parameters']['key_quest']);
        $entity->setStart($_POST['parameters']['start']);
        $entity->setTitle($_POST['parameters']['title']);
        $entity->setQuest($_POST['parameters']['quest']);
        $entity->setMark($_POST['parameters']['mark']);
        $entity->setStatus($_POST['parameters']['status']);
        $entity->setType($_POST['parameters']['type']);
        $entity->setData($_POST['parameters']['data']);
        $entity->save();

        return [];
    }
}