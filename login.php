<?php

session_start();

include("config.php");

if(isset($_POST['login'])){

$uname = mysqli_real_escape_string($conn,$_POST['username']);

$pass = mysqli_real_escape_string($conn,$_POST['password']);

//check username password with database
$get_admin = "select * from system where username='$uname' AND password='$pass'";
//execute query 
$run_admin = mysqli_query($conn,$get_admin);
//get row count
$count = mysqli_num_rows($run_admin);
//check count of the row
if($count==1){

//	$_SESSION['logged_in']='1';
$_SESSION['username']=$uname;
//
//$sess = $_SESSION['username'];

echo "<script>alert('You are Logged in into system ')</script>";

echo "<script>window.open('dashboard.php','_self')</script>";

}
else {

echo "<script>alert('Username or Password is Wrong')</script>";
echo "<script>window.open('index1.html','_self')</script>";
}

}

?>