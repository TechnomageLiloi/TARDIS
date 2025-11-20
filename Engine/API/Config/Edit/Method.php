<?php

namespace Liloi\TARDIS\API\Config\Edit;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domain\Config\Manager as ConfigManager;

/**
 * Rune API: TARDIS.Application.Diary.Edit
 */
class Method extends SuperMethod
{
    public function execute(): array
    {
        $this->checkAccess();
        $update = ConfigManager::load('update')->getString();

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'update' => $update
            ])
        ];
    }
}