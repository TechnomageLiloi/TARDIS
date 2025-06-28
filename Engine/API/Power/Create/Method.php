<?php

namespace Liloi\TARDIS\API\Power\Create;

use Liloi\TARDIS\Domains\Power\Manager as PowerManager;
use Liloi\TARDIS\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        PowerManager::create();
        return [];
    }
}