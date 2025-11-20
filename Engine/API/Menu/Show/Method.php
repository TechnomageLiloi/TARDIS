<?php

namespace Liloi\TARDIS\API\Menu\Show;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domain\Maps\Manager as DiaryManager;
use Liloi\TARDIS\Secure;

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