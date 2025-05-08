<?php

namespace Liloi\Rune\API\Services\Text\Edit;

use Liloi\Rune\API\Method as SuperMethod;
use Liloi\Rune\Domains\Areas\Manager as AreasManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $URI = $_SERVER['REQUEST_URI'];
        $root = self::getConfig()['root'];
        $name = $_POST['parameters']['name'];

        $path = ROOT_DIR . $root . $URI . '/' . $name;
        $data = file_get_contents($path);

        return [
            'render' => $this->render(__DIR__ . '/Template.tpl', [
                'path' => $path,
                'data' => $data
            ])
        ];
    }
}