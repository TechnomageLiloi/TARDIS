<?php

namespace Liloi\TARDIS\API\Taboos\Show;

use Liloi\TARDIS\Domains\Taboos\Manager as TaboosManager;
use Liloi\TARDIS\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        $collection = TaboosManager::loadCollection();

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'collection' => $collection
            ])
        ];
    }
}