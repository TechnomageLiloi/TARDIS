<?php

namespace Liloi\TARDIS\API\Codex\Save;

use Liloi\TARDIS\Domains\Codex\Manager as CodexManager;
use Liloi\TARDIS\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        $entity = CodexManager::load($_POST['parameters']['key_codex']);

        $entity->setTitle($_POST['parameters']['title']);
        $entity->setExecuted($_POST['parameters']['executed']);
        $entity->setSummary($_POST['parameters']['summary']);
        $entity->setData($_POST['parameters']['data']);

        $entity->save();

        return [];
    }
}