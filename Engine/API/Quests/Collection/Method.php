<?php

namespace Liloi\TARDIS\API\Quests\Collection;

use Liloi\TARDIS\Domains\Quests\Manager as QuestsManager;
use Liloi\TARDIS\API\Method as AbstractMethod;

/**
 * Rune API: Blueprint.Blueprints.Show
 * @package Liloi\Librarium\API\Blueprints\Show
 */
class Method extends AbstractMethod
{
    public function execute(): array
    {
        $collection = QuestsManager::loadCollection();

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'collection' => $collection
            ])
        ];
    }
}