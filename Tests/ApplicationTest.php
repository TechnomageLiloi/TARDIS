<?php

namespace Liloi\TARDIS;

use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    public function testExistence()
    {
        $this->assertEquals('Liloi\\TARDIS\\Application', Application::class);
        $this->assertEquals('Liloi\\TARDIS', Application::PREFIX);
    }
}