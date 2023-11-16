<?php

require_once __DIR__ . '/../AutoLoad.php';
use SRP\Manager;


$job=new Manager\JobApplicationManager();
$job->addApplication(null);