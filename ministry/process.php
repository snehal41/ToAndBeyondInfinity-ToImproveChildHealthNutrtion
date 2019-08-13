<?php

$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripcslashes($username);
$password = stripcslashes($password);   

/*
$user2 = 'root';
$pass2 = 'root';
$db2 = 'sih';
$db2 = new mysqli('localhost',$user2,$pass2,$db2);*/
include 'dbconfig.php';
$query = mysqli_query($db2,"SELECT * FROM phcregister where Email = '$_POST[user]' AND Password = '$_POST[pass]'");
$rowcount=mysqli_num_rows($query);
if($rowcount > 0)
{
	//echo "hii";
	session_start();
	$_SESSION['user'] = $_POST['user'];
	$_SESSION['logged in'] = 'true';

	echo "<script type='text/javascript'>alert('Login successfully!')</script>";
       header("location:index.php");
}
else
{
    echo "<script type='text/javascript'>alert('Login failed!')</script>";
    header("location:login.php");
}


?>