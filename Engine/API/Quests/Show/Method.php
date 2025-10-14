<?php

namespace Liloi\UMKLAIDET\API\Quests\Show;

use Liloi\UMKLAIDET\API\Method as SuperMethod;
use Liloi\UMKLAIDET\Domain\Quests\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        //
        $entity = DiaryManager::load($_POST['parameters']['key_quest']);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity
            ])
        ];
    }
}