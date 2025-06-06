<?php

namespace Liloi\BOYARD\API\Levels\Edit;

use Liloi\BOYARD\Domains\Levels\Manager;
use Liloi\BOYARD\Domains\Levels\Statuses;
use Liloi\BOYARD\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        $entity = Manager::load($_POST['parameters']['key']);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity,
                'statuses' => Statuses::$list,
            ])
        ];
    }
}