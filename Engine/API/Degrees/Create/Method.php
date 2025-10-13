<?php

namespace Liloi\BOYARD\API\Degrees\Create;

use Liloi\BOYARD\API\Method as SuperMethod;
use Liloi\BOYARD\Domain\Degrees\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        DiaryManager::create();
        return [];
    }
}