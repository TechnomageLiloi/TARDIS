<?php

namespace Liloi\Rune\API\Quests\InHand;

use Liloi\Rune\API\Method as SuperMethod;
use Liloi\Rune\Domain\Quests\Manager as DiaryManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $entity = DiaryManager::load($_POST['parameters']['key_quest']);
        $entity->setStart(date('Y-m-d H:i:s'));
        $entity->save();

        return [];
    }
}