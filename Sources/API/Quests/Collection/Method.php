<?php

namespace Liloi\Rune\API\Quests\Collection;

use Liloi\Rune\API\Method as SuperMethod;

class Method extends SuperMethod
{
    public function execute(): array
    {
        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [

            ])
        ];
    }
}