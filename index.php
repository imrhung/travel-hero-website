<?php
// Config
require 'config.php';

// Also spl_autoload_register (Take a mlook at it if you like)
function __autoload($class) {
    require LIBS . $class .".php";
}
$app = new Bootstrap();