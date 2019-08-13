<?php

include 'dbconfig.php';
$id=$_SESSION['user'];
if(isset($_POST['sub'])) {

    $total = mysqli_real_escape_string($connect, $_POST['total']);
    $mortal = mysqli_real_escape_string($connect, $_POST['mortal']);
    $male = mysqli_real_escape_string($connect, $_POST['male']);
    $female = mysqli_real_escape_string($connect, $_POST['female']);
    $above = mysqli_real_escape_string($connect, $_POST['above']);
    $below = mysqli_real_escape_string($connect, $_POST['below']);
    $vaccination = mysqli_real_escape_string($connect, $_POST['vaccination']);


    $insert_query = $connect->query("insert into infant_details values ($id,'$total','$mortal','$male','$female','$above','$below','$vaccination')");

    //$insert_query = $connect->query("insert into staff_details (phcid)values ('1')");
    if ($insert_query) {
        //  echo "<script>alert('Inserted Successfully')</script>";
        echo '<script language="javascript">';
        echo 'alert("message successfully sent")';
        echo '</script>';

        header("Location: ../infant.php");
        //  exit();
    } else
        echo '<script>alert("Problem Inserting Data")</script>';
}

$connect->close();
?>