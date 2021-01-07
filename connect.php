<?php

define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASSWORD', '');
define('DB', 'login');

$connect = mysqli_connect(HOST, USER, PASSWORD, DB) or die ("Not connected!");

?>