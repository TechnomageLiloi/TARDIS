<?php

namespace Liloi\TARDIS\API\Taboos\Create;

use Liloi\TARDIS\Domains\Taboos\Manager as TaboosManager;
use Liloi\TARDIS\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        TaboosManager::create();
        return [];
    }
}