<?php
require_once __DIR__ . '/../AutoLoad.php';

use OCP\Model;


$employee = new Model\FullTimeEmployee(200);
//$employee=new Model\PartTimeEmployee(20 ,200 );
$employee = new Model\Training();

echo 'salary = ' . $employee->calculateSalary();