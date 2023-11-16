<?php

namespace ISP\Class;
require_once __DIR__ . '/../../AutoLoad.php';

use ISP\Interface;


class TestingTime implements Interface\ITestingProcess
{

    public function test()
    {
        echo "\n Testing Time only";
    }
}