<?php
$server = "localhost";
$db_user = "root";
$db_pswd = "";
$db_name = "db_csc3411";

$con = mysqli_connect($server,$db_user,$db_pswd,$db_name);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
?>