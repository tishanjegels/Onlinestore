<?php

define('DB_NAME', 'onlineshop');
define('DB_USER', 'Admin@onlineshop');
define('DB_PASSWORD', 'Beautyhair@t06');
define('DB_HOST', 'localhost');

$connection = @mysql_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(!$connection){
    die('Could not connect:' .mysql_connect_error());
};

?>