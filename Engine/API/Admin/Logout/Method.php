<?php

namespace Liloi\TARDIS\API\Admin\Logout;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Secure;

class Method extends SuperMethod
{
    public function execute(): array
    {
        Secure::logout();
        return [];
    }
}