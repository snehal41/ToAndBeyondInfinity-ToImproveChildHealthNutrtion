<?php
       include 'dbconfig.php';
       $id=$_SESSION['user'];  

if (isset($_POST['sub1'])) {

    $urine_routine = $_POST['urine_routine'];
    $blood_tests = $_POST['blood_tests'];
    $diagnosis = $_POST['diagnosis'];
    $sputum = $_POST['sputum'];
    $maleria = $_POST['maleria'];
    $rapid_pregancy = $_POST['rapid_pregancy'];
    $rapid_hiv = $_POST['rapid_hiv'];

    $result = $connect->query("select * from lab_services where PHCid=1");

    if ($result->num_rows >0) {
        $update_query = $connect->query("update lab_services set urine_routine='$urine_routine',blood_tests='$blood_tests',diagnosis_RTI_STD='$diagnosis',sputum_testing='$sputum',malaria_exam='$maleria',rapid_pregnancy_test='$rapid_pregancy',rapid_HIV_test='$rapid_hiv' where PHCid='$id'");
        echo "<script>alert('Inserted Successfully')</script>";
        header("Location: ../facilities.php");
        exit();

    } else {
        $insert_query = $connect->query("insert into lab_services values ($id,'$urine_routine','$blood_tests','$diagnosis','$sputum','$maleria','$rapid_pregancy','$rapid_hiv')");

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