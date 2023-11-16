<?php

namespace OCP\Model;
require_once __DIR__ . '/../../AutoLoad.php';

class Training extends Employee
{


    public function calculateSalary()
    {
        return 2000;
    }
}