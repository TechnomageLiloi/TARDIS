<?php

namespace Liloi\TARDIS\API\Road\Show;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domains\Road\Manager as DiaryManager;
use Liloi\TARDIS\API\Atoms\Show\Method as APIAtomsShow;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $URI = trim($_SERVER['REQUEST_URI'], '/');
        $countSlash = substr_count($URI, '/');

        if($countSlash > 2)
        {
            return (new APIAtomsShow())->execute();
        }

        $key = str_replace('/', '-', $URI);

        $entity = DiaryManager::load($key);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity
            ])
        ];
    }
}