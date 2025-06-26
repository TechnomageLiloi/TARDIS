<?php

namespace Liloi\TARDIS\API\Milestones\Create;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domains\Milestones\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        DiaryManager::create();
        return [];
    }
}