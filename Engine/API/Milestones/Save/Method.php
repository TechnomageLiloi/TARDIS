<?php

namespace Liloi\UMKLAIDET\API\Milestones\Save;

use Liloi\UMKLAIDET\API\Method as SuperMethod;
use Liloi\UMKLAIDET\Domain\Milestones\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $entity = DiaryManager::load($_POST['parameters']['key_milestone']);

        $entity->setStatus($_POST['parameters']['status']);
        $entity->setSummary($_POST['parameters']['summary']);
        $entity->setTitle($_POST['parameters']['title']);
        $entity->setStart($_POST['parameters']['start']);
        $entity->setFinish($_POST['parameters']['finish']);

        $entity->save();

        return [];
    }
}