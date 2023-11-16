<?php

namespace OCP\Model;

abstract class Employee
{
    public $name;
    public $address;
    public $age;

    abstract public function calculateSalary();
}