<?php

namespace LSP\Model;
require_once __DIR__ . '/../../AutoLoad.php';

abstract class DismissEmployee extends Employee
{

    protected $dismissed;

    public function dismiss()
    {
        $this->dismissed=true;
        echo "Employee dismissed";
    }

}