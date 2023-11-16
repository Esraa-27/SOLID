<?php

require_once './../AutoLoad.php';

//dependency injection

$developmentTool = new DIP\DevelopmentTool();
$dev = new DIP\Developer($developmentTool);
$dev->developmentTool->print();