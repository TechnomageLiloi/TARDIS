<?php

namespace Liloi\TARDIS\API\Tickets\Save;

use Liloi\TARDIS\Domains\Tickets\Manager;
use Liloi\TARDIS\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        $entity = Manager::load($_POST['parameters']['key_ticket']);

        $entity->setTitle($_POST['parameters']['title']);
        $entity->setStatus($_POST['parameters']['status']);
        $entity->setData($_POST['parameters']['data']);
        $entity->setProgram($_POST['parameters']['program']);

        $entity->save();

        return [];
    }
}