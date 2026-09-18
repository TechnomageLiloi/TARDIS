<?php

namespace Liloi\Rune\API\Admin\Login;

use Liloi\Rune\API\Method as SuperMethod;
use Liloi\Rune\Secure;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $password = $_POST['parameters']['password'];

        $checkAdmin = Secure::checkPassword($password);
        if($checkAdmin)
        {
            Secure::login();
        }

        return [
            'check' => $checkAdmin
        ];
    }
}