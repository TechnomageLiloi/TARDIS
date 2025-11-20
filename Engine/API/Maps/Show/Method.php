<?php

namespace Liloi\TARDIS\API\Maps\Show;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domain\Maps\Manager as DiaryManager;
use Liloi\TARDIS\Secure;
use Liloi\TARDIS\API\Menu\Show\Method as MenuShowMethod;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $mapID = DiaryManager::getMapID();

        if($mapID === ':')
        {
            return (new MenuShowMethod())->execute();
        }

        $entity = DiaryManager::load($mapID);

        if(!Secure::checkLogin() && !$entity->getPublished())
        {
            throw new \Exception('Access denied.');
        }

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity
            ])
        ];
    }
}