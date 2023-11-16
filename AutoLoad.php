<?php
spl_autoload_register("load_model");


function load_model($class_name)
{
    //$path_to_file = __DIR__ ."/../".$class_name . '.php';
    $path_to_file = __DIR__ . "/" . str_replace('\\', '/', $class_name) . '.php';
    //var_dump($path_to_file);die;
    if (file_exists($path_to_file)) {
        require_once $path_to_file;
    }
}


