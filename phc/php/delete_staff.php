<?php
include 'dbconfig.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo $id;

    $delete_query = $connect->query("delete from staff_details where staff_id='$id'");
    if ($delete_query) {
        header("Location: ../staff.php");
        exit();
    } else {
        echo '<script>alert("Problem Deleting Data Data")</script>';
    }
}
?>