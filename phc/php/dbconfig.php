<?php 
session_start();
      
      //$username=$_SESSION['user']['username'];
      $connect = mysqli_connect("localhost", "root", "root", "sih");
      if ($connect->connect_error) {
			die("Connection failed: " . $connect->connect_error);
		}
      
?>