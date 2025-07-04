<?php

namespace Liloi\TARDIS\API\Quests\Edit;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domains\Quests\Manager as QuestsManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $quest = QuestsManager::load($_POST['parameters']['keyQuest']);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'quest' => $quest
            ])
        ];
    }
}