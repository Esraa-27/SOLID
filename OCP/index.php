<?php
//require_once './Model/FullTimeEmployee.php';
//require_once './Model/PartTimeEmployee.php';
//require_once './Model/Training.php';
use \OCP\Model ;


$employee=new Model\FullTimeEmployee(200);
//$employee=new Model\PartTimeEmployee(20 ,200 );
//$employee=new Model\Training();

echo 'salary = '. $employee->calculateSalary();