<?php
require_once __DIR__ . '/../AutoLoad.php';

use ISP\Class;

$dev = new Class\DevelopmentTime();
$dev->writeCode();
$dev->test();


$test = new Class\TestingTime();
$test->test();
