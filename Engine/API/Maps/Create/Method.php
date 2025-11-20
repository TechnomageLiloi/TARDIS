<?php

namespace Liloi\TARDIS\API\Maps\Create;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domain\Maps\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $this->checkAccess();
        DiaryManager::create(DiaryManager::getMapID());
        return [];
    }
}