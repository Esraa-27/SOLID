<?php
require_once __DIR__ . '/../AutoLoad.php';

use LSP\Model;


//$employee=new Model\FullTimeEmployee();
$employee = new Model\PartTimeEmployee();
//$employee=new Model\CEO();

$employee->dismiss();