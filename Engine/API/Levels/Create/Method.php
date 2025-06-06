<?php

namespace Liloi\BOYARD\API\Levels\Create;

use Liloi\BOYARD\Domains\Levels\Manager;
use Liloi\BOYARD\API\Method as AbstractMethod;

class Method extends AbstractMethod
{
    public function execute(): array
    {
        Manager::create();
        return [];
    }
}