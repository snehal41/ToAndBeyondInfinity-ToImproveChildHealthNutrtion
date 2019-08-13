<?php

include 'dbconfig.php';

if(isset($_POST['login']))
{
  $username=mysqli_real_escape_string($connect,$_POST['user']);
  $password=mysqli_real_escape_string($connect,$_POST['pass']);
  if(empty($username)&&empty($password))
  {
  $error= 'Fileds are Mandatory';
  }
  else
{
 //Checking Login Detail
 $result=mysqli_query($connect,"SELECT * FROM login WHERE  id ='$username' AND password='$password'");
 $row=mysqli_fetch_assoc($result);
 $count=mysqli_num_rows($result);
 if($count==1)
 {
      $_SESSION['user']=array(
   'username'=>$row['username'],
   'password'=>$row['password'],
   'usertype'=>$row['usertype']
   );
      
   $usertype=$_SESSION['user']['usertype'];
   
   //Redirecting User Based on usertype
    switch($usertype){
  case 'phc':
    session_start();
  $_SESSION['logged in']=true;
  $_SESSION['user'] = $_POST['user'];
  header('location:phc/index.php');

  break;

  case 'ministry':
  session_start();
 $_SESSION['logged in']='true';
  $_SESSION['user'] = $_POST['user'];
  header('location:ministry/index.php');
 
  break;
  
  case 'admin':
   session_start();
  $_SESSION['logged in']=true;
  $_SESSION['user'] = $_POST['user'];
  header('location:admin/index.php');
 
  break;
  
 }
}
 else
 {
  $error='Your PassWord or UserName is not Found';
 }
}
}