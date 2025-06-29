<?php

namespace Liloi\TARDIS\API\Codex\Show;

use Liloi\TARDIS\Domains\Codex\Manager as CodexManager;
use Liloi\TARDIS\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        $entity = CodexManager::load($_POST['parameters']['key_codex']);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity
            ])
        ];
    }
}