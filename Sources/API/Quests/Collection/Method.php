<?php

namespace Liloi\Rune\API\Quests\Collection;

use Liloi\Rune\API\Method as SuperMethod;
use Liloi\Rune\Domains\Quests\Manager as QuestsManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $quests = QuestsManager::loadCollection();

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'quests' => $quests
            ])
        ];
    }
}