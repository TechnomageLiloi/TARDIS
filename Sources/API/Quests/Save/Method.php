<?php

namespace Liloi\Rune\API\Quests\Save;

use Liloi\Rune\API\Method as SuperMethod;
use Liloi\Rune\Domains\Quests\Manager as QuestsManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $quest = QuestsManager::load($_POST['parameters']['keyQuest']);

        $quest->setGoal($_POST['parameters']['goal']);
        $quest->setStatus($_POST['parameters']['status']);
        $quest->setData($_POST['parameters']['data']);

        $quest->save();

        return [];
    }
}