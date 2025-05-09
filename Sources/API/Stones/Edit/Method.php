<?php

namespace Liloi\Rune\API\Stones\Edit;

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