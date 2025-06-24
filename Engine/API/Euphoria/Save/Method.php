<?php

namespace Liloi\TARDIS\API\Euphoria\Save;

use Liloi\TARDIS\Domains\Euphoria\Manager as EuphoriaManager;
use Liloi\TARDIS\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        $entity = EuphoriaManager::load($_POST['parameters']['key']);

        $entity->setTitle($_POST['parameters']['title']);
        $entity->setSummary($_POST['parameters']['summary']);
        $entity->setData($_POST['parameters']['data']);
        $entity->setPrice($_POST['parameters']['price']);
        $entity->setDt($_POST['parameters']['dt']);

        $entity->save();

        return [];
    }
}