<?php
include_once  'config.php';
include_once 'lang/language.php';
function my_autoloader($class) {
    include 'classes/class.' . $class . '.php';
}
spl_autoload_register('my_autoloader');

if(!Session::read("id")){
    Session::start();
}
?>
