<?php

namespace Liloi\TARDIS\API\Quests\Collection;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domain\Quests\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $collection = DiaryManager::loadCollection();

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'collection' => $collection,
            ])
        ];
    }
}