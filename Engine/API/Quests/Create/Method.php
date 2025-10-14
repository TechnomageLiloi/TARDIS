<?php

namespace Liloi\BOYARD\API\Quests\Create;

use Liloi\BOYARD\API\Method as SuperMethod;
use Liloi\BOYARD\Domain\Quests\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        DiaryManager::create();
        return [];
    }
}