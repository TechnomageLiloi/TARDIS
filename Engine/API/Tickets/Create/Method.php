<?php

namespace Liloi\TARDIS\API\Tickets\Create;

use Liloi\TARDIS\Domains\Tickets\Manager;
use Liloi\TARDIS\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        Manager::create();
        return [];
    }
}