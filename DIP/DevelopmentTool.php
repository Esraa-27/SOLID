<?php

namespace DIP;

class DevelopmentTool implements IDevelopmentTool
{
    public function __construct()
    {
    }
    public function print(): void
    {
        echo "Development Tool";
    }
}