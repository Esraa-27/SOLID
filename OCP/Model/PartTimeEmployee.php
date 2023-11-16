<?php

namespace OCP\Model;
require_once __DIR__ . '/../../AutoLoad.php';

class PartTimeEmployee extends Employee
{
    public $hour;
    public $costPerHour;

    public function __construct($hour, $costPerHour)
    {
        $this->hour = $hour;
        $this->costPerHour = $costPerHour;
    }

    public function calculateSalary()
    {
        return $this->hour * $this->costPerHour;
    }
}