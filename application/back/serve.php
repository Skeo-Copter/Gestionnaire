<?php

use Service\Task;
use Service\User;



define('DS', DIRECTORY_SEPARATOR);
define('ROOT_PATH',__DIR__);
define('LIB_PATH', ROOT_PATH. '\lib');
define('SRC_PATH', ROOT_PATH. '\src');

set_include_path(implode(PATH_SEPARATOR, array(
    LIB_PATH,SRC_PATH,
)));

spl_autoload_register(function ($classname){
    require_once str_replace('\\', DS, $classname).'.php';
});

$todo = new Task();

$todo->serve();
