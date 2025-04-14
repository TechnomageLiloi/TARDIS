<?php

namespace Liloi\TARDIS\API\Road\Save;

use Liloi\API\Response;
use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domains\Road\Manager as DiaryManager;

/**
 * Rune API: Interstate60.Application.Diary.Save
 */
class Method extends SuperMethod
{
    public function execute(): array
    {
        $entity = DiaryManager::load($_POST['parameters']['key_day']);

        $entity->setData($_POST['parameters']['data']);
        $entity->setProgram($_POST['parameters']['program']);

        $entity->save();

        return new Response();
    }
}