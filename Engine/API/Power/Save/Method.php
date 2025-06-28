<?php

namespace Liloi\TARDIS\API\Power\Save;

use Liloi\TARDIS\Domains\Power\Manager as PowerManager;
use Liloi\TARDIS\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        $entity = PowerManager::load($_POST['parameters']['key']);

        $entity->setFirstname($_POST['parameters']['firstname']);
        $entity->setFullname($_POST['parameters']['fullname']);
        $entity->setNickname($_POST['parameters']['nickname']);
        $entity->setDegree($_POST['parameters']['degree']);
        $entity->setType($_POST['parameters']['type']);
        $entity->setSummary($_POST['parameters']['summary']);
        $entity->setData($_POST['parameters']['data']);
        $entity->setDt($_POST['parameters']['dt']);

        $entity->save();

        return [];
    }
}