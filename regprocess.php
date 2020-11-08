<?php
session_start();
include 'connection.php';

//Code for Registration 
if(isset($_POST['register']))
{
  $fname=$_POST['fname'];
  $mname=$_POST['mname'];
  $sname=$_POST['sname'];
  $address=$_POST['address'];
  $dob=$_POST['dob'];
  $gender=$_POST['gender'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $chke= mysqli_query($con,"SELECT * FROM tbl_data WHERE email='$email'");
  $chkeres=mysqli_fetch_array($chke);
  if($chkeres>0)
  {
    echo "<script>alert('Email Already Exist!');</script>";
    echo "<script>window.location.href='registration_form.php';</script>";
  }
  
  elseif($chkeres==0)
  {
  $query = "INSERT INTO `tbl_data`(`fname`,`mname`,`sname`,`address`,`dob`,`gender`,`phone`,`email`,`username`,`password`) VALUES('$fname','$mname','$sname','$address','$dob','$gender','$phone','$email','$username','$password')";
  mysqli_query($con, $query);
  echo "<script>alert('Registration Successfully');</script>";
  echo "<script>window.location.href='index.php';</script>";
  }
}
?>