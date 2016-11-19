<?php
define('DB_PORT', getenv('8080'));
define('DB_USER', getenv('root'));
define('DB_PASS', getenv('toor'));
define('DB_NAME', getenv('applogin'));

$mysqlCon = mysqli_connect($B_USER,$DB_PASS, "",$8080) or die("Error: " . mysqli_error($mysqlCon));
mysqli_select_db($mysqlCon,$DB_NAME) or die("Error: " . mysqli_error($mysqlCon));
?>