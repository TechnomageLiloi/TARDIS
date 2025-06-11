<?php

namespace Liloi\TARDIS\API\Quests\Create;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domains\Quests\Manager as QuestsManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        QuestsManager::create();
        return [];
    }
}