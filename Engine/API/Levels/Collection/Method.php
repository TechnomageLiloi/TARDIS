<?php

namespace Liloi\BOYARD\API\Levels\Collection;

use Liloi\BOYARD\API\Method as SuperMethod;
use Liloi\BOYARD\Domain\Levels\Manager as DiaryManager;

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