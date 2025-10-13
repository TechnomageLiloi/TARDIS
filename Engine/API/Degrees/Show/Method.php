<?php

namespace Liloi\BOYARD\API\Degrees\Show;

use Liloi\BOYARD\API\Method as SuperMethod;
use Liloi\BOYARD\Domain\Degrees\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        //
        $entity = DiaryManager::load($_POST['parameters']['key_degree']);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity
            ])
        ];
    }
}