<?php
namespace OCP\Model;

require_once './Employee.php';
use OCP\Model;
class FullTimeEmployee extends Employee
{
    public $bonus;

    public function __construct($bonus)
    {
        $this->bonus=$bonus;
    }

    public function calculateSalary()
    {
        echo $this->bonus + 2000;
    }
}