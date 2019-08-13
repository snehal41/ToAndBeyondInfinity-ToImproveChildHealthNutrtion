<?php
include 'dbconfig.php';

      $id=$_SESSION['user']; 
if (isset($_POST['sub'])) {

    $opd = $_POST['opd_service'];
    $emergency = $_POST['emergency_services'];
    $antenatal_care = $_POST['antenatal_care'];
    $postnatal_care = $_POST['postnatal_care'];
    $intranatal_care = $_POST['intranatal_care'];
    $newborn_care = $_POST['newborn_care'];
    $child_care = $_POST['child_care'];
    $family_plan = $_POST['family_plan'];
    $service_24 = $_POST['24_service'];
    $nutrition = $_POST['nutrition'];
    $school_prgm = $_POST['school_prgm'];
    $rehabilitation = $_POST['rehabilitation'];

    $result = $connect->query("select * from services where PHCid=1");

    if ($result->num_rows >0) {
        $update_query = $connect->query("update services set opd_services='$opd',emergency_services='$emergency',antenatal_care='$antenatal_care',postnatal_care='$postnatal_care',intranatal_care='$intranatal_care',newborn_care='$newborn_care',child_care='$child_care',family_planning='$family_plan',24_hours='$service_24',nutrition='$nutrition',school_health_program='$school_prgm',rehabilitation='$rehabilitation' where PHCid=1");
        echo "<script>alert('Inserted Successfully')</script>";
        header("Location: ../facilities.php");
        exit();

    } else {
        $insert_query = $connect->query("insert into services values ($id,'$opd','$emergency','$antenatal_care','$postnatal_care','$intranatal_care','$newborn_care','$child_care','$family_plan','$service_24','$nutrition','$school_prgm','$rehabilitation')");

        if ($insert_query) {

            echo "<script>alert('Inserted Successfully')</script>";
            header("Location: ../facilities.php");
            exit();
        } else
            echo '<script>alert("Problem Inserting Data")</script>';
    }
}

$connect->close();
?>