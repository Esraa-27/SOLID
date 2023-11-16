<?php

namespace DIP;


class Developer
{
    public IDevelopmentTool $developmentTool;

    public function __construct(IDevelopmentTool $developmentTool)
    {
        $this->developmentTool = $developmentTool;
    }


}

