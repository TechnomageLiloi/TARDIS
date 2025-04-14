<?php

namespace Liloi\TARDIS\API\Road\Show;

use Liloi\API\Response;
use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domains\Road\Manager as DiaryManager;

/**
 * Rune API: Interstate60.Application.Diary.Show
 */
class Method extends SuperMethod
{
    public function execute(): array
    {
        $entity = DiaryManager::loadCurrent();

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity
            ])
        ];
    }
}