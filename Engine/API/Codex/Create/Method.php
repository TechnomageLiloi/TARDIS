<?php

namespace Liloi\TARDIS\API\Codex\Create;

use Liloi\TARDIS\Domains\Codex\Manager as CodexManager;
use Liloi\TARDIS\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        CodexManager::create();
        return [];
    }
}