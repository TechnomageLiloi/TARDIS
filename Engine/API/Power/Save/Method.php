<?php

namespace Liloi\TARDIS\API\Power\Save;

use Liloi\TARDIS\Domains\Power\Manager as PowerManager;
use Liloi\TARDIS\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        $entity = PowerManager::load($_POST['parameters']['key']);

        $entity->setTitle($_POST['parameters']['title']);
        $entity->setSummary($_POST['parameters']['summary']);
        $entity->setData($_POST['parameters']['data']);
        $entity->setPrice($_POST['parameters']['price']);
        $entity->setDt($_POST['parameters']['dt']);

        $entity->save();

        return [];
    }
}