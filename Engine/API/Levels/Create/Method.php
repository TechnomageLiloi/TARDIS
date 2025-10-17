<?php

namespace Liloi\TARDIS\API\Levels\Create;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domain\Levels\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        DiaryManager::create();
        return [];
    }
}