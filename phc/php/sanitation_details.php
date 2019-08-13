<?php
include 'dbconfig.php';
$id=$_SESSION['user'];  

if (isset($_POST['sub'])) {

    $waste_disposal = $_POST['waste_disposal'];
    $sewage_disposal = $_POST['sewage_disposal'];
    $medical_disposal = $_POST['medical_disposal'];
    $female_washroom = $_POST['female_washroom'];
    $male_washroom = $_POST['male_washroom'];
    $pool = $_POST['pool'];
    $pollution = $_POST['pollution'];

    $result = $connect->query("select * from sanitation_details where PHCid='$id'");

    if ($result->num_rows >0) {
        $update_query = $connect->query("update sanitation_details set waste_disposal='$waste_disposal',sewerage_system='$sewage_disposal',medical_disposal='$medical_disposal',female_washroom='$female_washroom',male_washroom='$male_washroom',stagnant_pool='$pool',industry_pollution='$pollution' where PHCid='$id'");
        echo "<script>alert('Inserted Successfully')</script>";
        header("Location: ../sanitation.php");
        exit();

    } else {
        $insert_query = $connect->query("insert into sanitation_details values ($id,'$waste_disposal','$sewage_disposal','$medical_disposal','$female_washroom','$male_washroom','$pool','$pollution')");

        if ($insert_query) {

            echo "<script>alert('Inserted Successfully')</script>";
            header("Location: ../sanitation.php");
            exit();
        } else
            echo '<script>alert("Problem Inserting Data")</script>';
    }
}

$connect->close();
?>