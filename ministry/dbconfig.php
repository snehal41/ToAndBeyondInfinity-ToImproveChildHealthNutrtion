<?php 
session_start();
      if($_SESSION['logged in'])
      {

      $username=$_SESSION['user'];
      $connect = mysqli_connect("localhost", "root", "root", "sih");
      }
      else
      {
      	//header("location:login.php");
      }
?>