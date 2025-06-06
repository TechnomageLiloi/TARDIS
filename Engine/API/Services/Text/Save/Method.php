<?php

namespace Liloi\TARDIS\API\Services\Text\Save;

use Liloi\TARDIS\API\Method as SuperMethod;

class Method extends SuperMethod
{
    public function execute(): array
    {
        file_put_contents($_POST['parameters']['path'], $_POST['parameters']['data']);
        return [];
    }
}