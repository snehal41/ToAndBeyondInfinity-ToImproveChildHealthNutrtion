<?php
/**
 * Created by IntelliJ IDEA.
 * User: shivani
 * Date: 22/2/19
 * Time: 11:24 PM
 */

include 'dbconfig.php';
$id=$_SESSION['user'];

if (isset($_POST['sub'])) {

    $name = $_POST['eq_name'];
    $available = $_POST['available'];
    $functioning = $_POST['functioning'];



        $insert_query = $connect->query("insert into equipment_details values ($id,'$name','$available','$functioning')");

        if ($insert_query) {

            echo "<script>alert('Inserted Successfully')</script>";
            header("Location: ../inventory.php");
            exit();
        } else
            echo '<script>alert("Problem Inserting Data")</script>';

}

$db->close();
?>