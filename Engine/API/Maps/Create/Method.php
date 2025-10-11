<?php

namespace Liloi\UMKLAIDET\API\Maps\Create;

use Liloi\UMKLAIDET\API\Method as SuperMethod;
use Liloi\UMKLAIDET\Domain\Maps\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        DiaryManager::create(DiaryManager::getMapID());
        return [];
    }
}