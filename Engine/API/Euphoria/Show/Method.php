<?php

namespace Liloi\TARDIS\API\Euphoria\Show;

use Liloi\TARDIS\Domains\Euphoria\Manager as EuphoriaManager;
use Liloi\TARDIS\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        $collection = EuphoriaManager::loadCollection();

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'collection' => $collection
            ])
        ];
    }
}