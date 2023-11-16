<?php

namespace OCP\Model;
require_once __DIR__ . '/../../AutoLoad.php';

class FullTimeEmployee extends Employee
{
    public $bonus;

    public function __construct($bonus)
    {
        $this->bonus = $bonus;
    }

    public function calculateSalary()
    {
        return $this->bonus + 2000;
    }
}