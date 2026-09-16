<?php

namespace Liloi\Rune\API\Thesis\Show;

use Liloi\Rune\API\Method as SuperMethod;
use Liloi\Rune\Domain\Thesis\Manager as ThesisManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $entity = ThesisManager::getThesis();

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'entity' => $entity
            ])
        ];
    }
}