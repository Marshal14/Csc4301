<?php 
session_start();
require_once('connection.php');

// Code for login system
if(isset($_POST['submit']))
{
$password=$_POST['password'];
$uname=$_POST['adminid'];
$ret= mysqli_query($con,"SELECT * FROM tbl_data WHERE username='$uname' and password='$password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="home.php";
$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
echo "<script>window.location.href='index.php';</script>";
}
}
 ?>