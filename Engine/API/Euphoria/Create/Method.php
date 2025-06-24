<?php

namespace Liloi\TARDIS\API\Euphoria\Create;

use Liloi\TARDIS\Domains\Euphoria\Manager as EuphoriaManager;
use Liloi\TARDIS\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        EuphoriaManager::create();
        return [];
    }
}