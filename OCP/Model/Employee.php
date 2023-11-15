<?php

namespace OCPModel;

abstract class Employee
{
    public $name;
    public $address;
    public $age;

    abstract public function calculateSalary();
}