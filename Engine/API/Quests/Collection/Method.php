<?php

namespace Liloi\UMKLAIDET\API\Quests\Collection;

use Liloi\UMKLAIDET\API\Method as SuperMethod;
use Liloi\UMKLAIDET\Domain\Quests\Manager as DiaryManager;

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