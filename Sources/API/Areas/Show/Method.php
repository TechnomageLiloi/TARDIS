<?php

namespace Liloi\BOYARD\API\Areas\Show;

use Liloi\BOYARD\API\Method as SuperMethod;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $root = self::getConfig()['root'];
        $files = scandir(ROOT_DIR . $root);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'files' => $files
            ])
        ];
    }
}