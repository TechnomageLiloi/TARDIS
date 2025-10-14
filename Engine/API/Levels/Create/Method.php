<?php

namespace Liloi\UMKLAIDET\API\Levels\Create;

use Liloi\UMKLAIDET\API\Method as SuperMethod;
use Liloi\UMKLAIDET\Domain\Levels\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        DiaryManager::create();
        return [];
    }
}