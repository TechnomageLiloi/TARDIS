<?php

namespace Liloi\TARDIS\API\Config\Save;

use Liloi\TARDIS\API\Method as SuperMethod;
use Liloi\TARDIS\Domain\Config\Manager as ConfigManager;

class Method extends SuperMethod
{
    public function execute(): array
    {
        $this->checkAccess();

        ConfigManager::save(ConfigManager::load('update')->setString($_POST['parameters']['update']));

        return [];
    }
}