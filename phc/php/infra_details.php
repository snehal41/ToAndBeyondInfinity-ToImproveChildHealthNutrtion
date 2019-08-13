<?php
include 'dbconfig.php';

     $id=$_SESSION['user'];               

if (isset($_POST['sub'])) {

    $no_labs = mysqli_real_escape_string($connect, $_POST['no_labs']);
    $no_beds = mysqli_real_escape_string($connect, $_POST['no_beds']);

    $labour_room = mysqli_real_escape_string($connect, $_POST['labour_room']);
    $waiting_room = mysqli_real_escape_string($connect, $_POST['waiting_room']);
    $opd_room = mysqli_real_escape_string($connect, $_POST['opd_room']);
    $ward_room = mysqli_real_escape_string($connect, $_POST['ward_room']);
    $operation_theater = mysqli_real_escape_string($connect, $_POST['operation_theater']);
    $strechers = mysqli_real_escape_string($connect, $_POST['strechers']);
    $emergency = mysqli_real_escape_string($connect, $_POST['emergency']);
    $pharmacy = mysqli_real_escape_string($connect, $_POST['pharmacy']);
    $maternity_room = mysqli_real_escape_string($connect, $_POST['maternity_room']);
    $doctor_room = mysqli_real_escape_string($connect, $_POST['doctor_room']);
    $visit_doctor_room = mysqli_real_escape_string($connect, $_POST['visit_doctor_room']);

    $public_utilities = $_POST['public_utility'];
    $electricity = $_POST['electricity'];
    $registration_counter = $_POST['registration_counter'];

    $result = $connect->query("select * from infrastructure_details where PHCid='$id'");

    if ($result->num_rows >0) {
        $update_query = $connect->query("update infrastructure_details set no_labs='$no_labs',no_beds='$no_beds',labour_room='$labour_room',waiting_circulatory_space='$waiting_room',opd_room='$opd_room',wards='$ward_room',operation_theater='$operation_theater',strechers='$strechers',emergency_entry_exit='$emergency',pharmacy='$pharmacy',maternity_room='$maternity_room',doctor_room='$doctor_room',visiting_doctor_room='$visit_doctor_room',public_utilities='$public_utilities',electricity_availability='$electricity',registration_counter='$registration_counter' where PHCid='$id'");
        echo "<script>alert('Inserted Successfully')</script>";
        header("Location: ../infrastructure.php");
        exit();

    } else {
        $insert_query = $connect->query("insert into infrastructure_details values ($id,'$no_labs','$no_beds','$labour_room','$waiting_room','$opd_room','$ward_room','$operation_theater','$strechers','$emergency','$pharmacy','$maternity_room','$doctor_room','$visit_doctor_room','$public_utilities','$electricity','$registration_counter')");

        if ($insert_query) {

            echo "<script>alert('Inserted Successfully')</script>";
            header("Location: ../infrastructure.php");

            exit();
        } else
            echo '<script>alert("Problem Inserting Data")</script>';
    }
}

$connect->close();
?>