<?php
/**
 * Created by IntelliJ IDEA.
 * User: shivani
 * Date: 22/2/19
 * Time: 11:24 PM
 */

$dbHost = 'localhost';
$dbUsername = 'mayuri';
$dbPassword = 'mayuri';
$dbName = 'sih2';

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error)
    die("Connection Failed .." . $db->connect_error);

if (isset($_POST['sub'])) {

    $start = mysqli_real_escape_string($db, $_POST['start']);
    $end = mysqli_real_escape_string($db, $_POST['end']);
    $state = mysqli_real_escape_string($db, $_POST['state']);
    $city = mysqli_real_escape_string($db, $_POST['city']);
    $contact = mysqli_real_escape_string($db, $_POST['contact']);

    $type=$_POST['type'];

    $insert_query = $db->query("insert into awareness_camp(PHCid,state,city,type,start_date,end_date,contact) values ('1','$state','$city','$type','$start','$end','$contact')");

    //$insert_query = $db->query("insert into staff_details (phcid)values ('1')");
    if ($insert_query) {
        //  echo "<script>alert('Inserted Successfully')</script>";
        echo '<script language="javascript">';
        echo 'alert("message successfully sent")';
        echo '</script>';

        header("Location: /camps.php");
        //  exit();
    } else
        echo '<script>alert("Problem Inserting Data")</script>';
}

$db->close();
?>