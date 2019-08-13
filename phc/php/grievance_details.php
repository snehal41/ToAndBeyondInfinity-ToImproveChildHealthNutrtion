<?php

include 'dbconfig.php';

if (isset($_POST['sub'])) {

    $subject = mysqli_real_escape_string($connect, $_POST['subject']);
    $desc = mysqli_real_escape_string($connect, $_POST['desc']);
    $state = $_POST['state'];
    $dist = $_POST['dist'];
    $tal = $_POST['tal'];

    $insert_query = $connect->query("insert into user_grievance(subject, description, state, district,taluka) values ('$subject','$desc','$state','$dist','$tal')");

    if ($insert_query) {

        echo "<script>alert('Inserted Successfully')</script>";
        header("Location: ../../grievance.php");
        exit();
    } else
        echo '<script>alert("Problem Inserting Data")</script>';
}

?>