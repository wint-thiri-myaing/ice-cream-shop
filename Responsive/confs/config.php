<?php
$dbhost = "localhost";
$dbuser = "wint";
$dbpass = "wint";
$dbname = "ice_cream";
$miye = mysqli_connect($dbhost, $dbuser, $dbpass);
if (!$miye) {
    error_log("Failed to connect to MySQL: ".mysqli_error($miye));
    die('Internal server error');
}

mysqli_select_db($miye, $dbname);
?>