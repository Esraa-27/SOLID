<?php

namespace ISP\Class;

require_once __DIR__ . '/../../AutoLoad.php';

use ISP\Interface;

class DevelopmentTime implements Interface\IDevelopmentProcess, Interface\ITestingProcess
{

    public function writeCode(): void
    {
        echo "\n can write code";
    }

    public function test(): void
    {
        echo "\n can test code";
    }
}