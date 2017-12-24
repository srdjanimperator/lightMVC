<?php

session_start();

define('root', dirname(__FILE__));

include root . "/lib/autoloader.php";

$app = new App();

$app->run();

?>