<?php

namespace OCP\Model;

class PartTimeEmployee extends Employee
{
    public $hour;
    public $costPerHour;
    public function __construct($hour , $costPerHour)
    {
        $this->hour=$hour;
        $this->costPerHour=$costPerHour;
    }

    public function calculateSalary()
    {
        echo $this->hour *$this->costPerHour ;
    }
}