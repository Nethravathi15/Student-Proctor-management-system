<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'proctoringdb');

/*
define('DB_SERVER', 'sg2nlmysql15plsk.secureserver.net');
define('DB_USERNAME', 'attrooter');
define('DB_PASSWORD', 'attroot@123');
define('DB_NAME', 'attendancedb');
 */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// $link=mysqli_connect('182.50.133.84:3306','salesroot','salesroot@123','salesdb'); 
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>