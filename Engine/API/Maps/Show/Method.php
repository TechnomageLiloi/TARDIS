<?php

namespace Liloi\BOYARD\API\Maps\Show;

use Liloi\BOYARD\API\Method as SuperMethod;
use Liloi\BOYARD\Domain\Maps\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $entity = DiaryManager::load(DiaryManager::getMapID());

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity
            ])
        ];
    }
}