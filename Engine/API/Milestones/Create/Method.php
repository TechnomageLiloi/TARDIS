<?php

namespace Liloi\BOYARD\API\Milestones\Create;

use Liloi\BOYARD\API\Method as SuperMethod;
use Liloi\BOYARD\Domain\Milestones\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        DiaryManager::create();
        return [];
    }
}