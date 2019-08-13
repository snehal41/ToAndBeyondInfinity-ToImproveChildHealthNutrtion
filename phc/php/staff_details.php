<?php
include 'dbconfig.php';
   $id=$_SESSION['user'];                      

if (isset($_POST['sub'])) {
    $name = mysqli_real_escape_string($connect, $_POST['staff_name']);
    $email = mysqli_real_escape_string($connect, $_POST['staff_email']);
    $contact = mysqli_real_escape_string($connect, $_POST['staff_mob']);

    $gender = $_POST['staff_gender'];
    $designation = $_POST['staff_designation'];



    $select_query = $connect->query("Select designation from staff_details where designation='$designation' and PHCid='$id'");

    if ($select_query->num_rows > 0) {
        if ($designation == "medical_officer_mbbs") {
            if($select_query->num_rows >1)
            {
                /*$msg="Only 1 MBBS officer allowed";
                echo '<script language="javascript">';
                echo "alert('$msg');";
                echo '</script>';*/
                $_SESSION["err_designation"] = "Only 1 MBBS officer allowed";
            }
        }
        elseif ($designation == "medical_officer_ayush") {
            if($select_query->num_rows >1)
            {
                echo "<script>alert('Only 1 AYUSH officer allowed')</script>";
                //$_SESSION["err_designation"] = "Only 1 AYUSH officer allowed";
            }
        }
        elseif ($designation == "account_operator") {
            if($select_query->num_rows >2)
            {
                echo "<script>alert('Only 2 Account Opreators allowed')</script>";
                //$_SESSION["err_designation"] = "Only 2 Account Opreators allowed";
            }
        }
        elseif ($designation == "pharmacist") {
            if($select_query->num_rows >1)
            {
                echo "<script>alert('Only 1 Pharmacist allowed')</script>";
                //$_SESSION["err_designation"] = "Only 1 Pharmacist allowed";
            }
        }
        elseif ($designation == "pharmacist_ayush") {
            if($select_query->num_rows >1)
            {
                echo "<script>alert('Only 1 AYUSH Pharmacist allowed')</script>";
                //$_SESSION["err_designation"] = "Only 1 AYUSH Pharmacist allowed";
            }
        }
        elseif ($designation == "nurse_midwife") {
            if($select_query->num_rows >3)
            {
                echo "<script>alert('Only 3 Nurse Midwives allowed')</script>";
                //$_SESSION["err_designation"] = "Only 3 Nurse Midwives allowed";
            }
        }
        elseif ($designation == "health_worker_female") {
            if($select_query->num_rows >1)
            {
                echo "<script>alert('Only 1 Feamle Health Worker allowed')</script>";
                //$_SESSION["err_designation"] = "Only 1 Feamle Health Worker allowed";
            }
        }
        elseif ($designation == "health_assistant_male") {
            if($select_query->num_rows >1)
            {
                echo "<script>alert('Only 1 Male Health Worker allowed')</script>";
                //$_SESSION["err_designation"] = "Only 1 Male Health Worker allowed";
            }
        }
        elseif ($designation == "health_assistant_female") {
            if($select_query->num_rows >1)
            {
                echo "<script>alert('Only 1 Female Health Assistant allowed')</script>";
                //$_SESSION["err_designation"] = "Only 1 Female Health Assistant allowed";
            }
        }
        elseif ($designation == "health_educator") {
            if($select_query->num_rows >1)
            {
                echo "<script>alert('Only 1 Health Educator allowed')</script>";
                //$_SESSION["err_designation"] = "Only 1 Health Educator allowed";
            }
        }
        elseif ($designation == "lab_tech") {
            if($select_query->num_rows >1)
            {
                echo "<script>alert('Only 1 Lab Technician allowed')</script>";
                //$_SESSION["err_designation"] = "Only 1 Lab Technician allowed";
            }
        }
        elseif ($designation == "cc_vaccine_assis") {
            if($select_query->num_rows >1)
            {
                echo "<script>alert('Only 1 Cold Chain & Vaccine Logistic Assistant allowed')</script>";
                //$_SESSION["err_designation"] = "Only 1 Cold Chain & Vaccine Logistic Assistant allowed";
            }
        }
        elseif ($designation == "group_d") {
            if($select_query->num_rows >2)
            {
                echo "<script>alert('Only 2 Group D Workers allowed')</script>";
                //$_SESSION["err_designation"] = "Only 2 Group D Workers allowed";
            }
        }
        elseif ($designation == "sanitory_worker") {
            if($select_query->num_rows >1)
            {
                echo "<script>alert('Only 1 Sanitary worker cum watchman allowed')</script>";
                //$_SESSION["err_designation"] = "Only 1 Sanitary worker cum watchman allowed";
            }
        }
        header("Location: ../staff.php");
        //exit();

    } else {

        $insert_query = $connect->query("insert into staff_details(PHCid, name, email_id, contact_no, gender, designation) values ($id,'$name','$email','$contact','$gender','$designation')");
        //$_SESSION["err_designation"] = "";
        if ($insert_query) {
            echo "<script>alert('Inserted Successfully')</script>";
            header("Location: ../staff.php");
            exit();
        } else
            echo '<script>alert("Problem Inserting Data")</script>';
    }
}

$connect->close();
?>