<?php

namespace LSP\Model;

abstract class DismissEmployee extends Employee
{

    public $dismissed;

    public function dismiss()
    {
        $this->dismissed=true;
    }

}