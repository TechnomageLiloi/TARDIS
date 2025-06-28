<?php

namespace Liloi\TARDIS\API\Power\Show;

use Liloi\TARDIS\Domains\Power\Manager as PowerManager;
use Liloi\TARDIS\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        $collection = PowerManager::loadCollection();

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'collection' => $collection
            ])
        ];
    }
}