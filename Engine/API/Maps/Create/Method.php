<?php

namespace Liloi\BOYARD\API\Maps\Create;

use Liloi\BOYARD\API\Method as SuperMethod;
use Liloi\BOYARD\Domain\Maps\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        DiaryManager::create(DiaryManager::getMapID());
        return [];
    }
}