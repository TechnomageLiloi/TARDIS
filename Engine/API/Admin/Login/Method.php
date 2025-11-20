<?php

namespace Liloi\TARDIS\API\Admin\Login;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Secure;

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