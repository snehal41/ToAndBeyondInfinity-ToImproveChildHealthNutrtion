<?php
/**
 * Created by IntelliJ IDEA.
 * User: shivani
 * Date: 22/2/19
 * Time: 11:24 PM
 */

include 'dbconfig.php';
session_start();

if ($connect->connect_error)
    die("Connection Failed .." . $connect->connect_error);

if (isset($_POST['sub1'])) {
    $id = mysqli_real_escape_string($connect, $_POST['staff_id']);
    $name = mysqli_real_escape_string($connect, $_POST['mstaff_name']);
    $email = mysqli_real_escape_string($connect, $_POST['mstaff_email']);
    $contact = mysqli_real_escape_string($connect, $_POST['mstaff_mob']);
    $gender = $_POST['mstaff_gender'];

    echo $name;
    $update_query = $connect->query("update staff_details set name='$name', email_id='$email', contact_no='$contact', gender='$gender' where staff_id='$id'");
    //$_SESSION["err_designation"] = "";
    if ($update_query) {
        echo "<script>alert('Updated Successfully')</script>";
        header("Location: ../staff.php");
        exit();
    } else
        echo '<script>alert("Problem Inserting Data")</script>';

}

$connect->close();
?>