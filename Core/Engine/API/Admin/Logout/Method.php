<?php

namespace Liloi\Rune\API\Admin\Logout;

use Liloi\Rune\API\Method as SuperMethod;
use Liloi\Rune\Secure;

class Method extends SuperMethod
{
    public function execute(): array
    {
        Secure::logout();
        return [];
    }
}