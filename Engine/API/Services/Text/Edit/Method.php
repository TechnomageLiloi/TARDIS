<?php

namespace Liloi\TARDIS\API\Services\Text\Edit;

use Liloi\TARDIS\API\Method as SuperMethod;

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