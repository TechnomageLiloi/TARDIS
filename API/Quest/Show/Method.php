<?php

namespace Liloi\TARDIS\API\Quest\Show;

use Liloi\TARDIS\API\Method as SuperMethod;

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