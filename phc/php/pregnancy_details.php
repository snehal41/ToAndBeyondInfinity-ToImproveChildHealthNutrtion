<?php
include 'dbconfig.php';
$id=$_SESSION['user'];

if (isset($_POST['save'])) {

    $total = mysqli_real_escape_string($connect, $_POST['total']);
    $expert = mysqli_real_escape_string($connect, $_POST['expert']);
    $doctor = mysqli_real_escape_string($connect, $_POST['doctor']);
    $sba = mysqli_real_escape_string($connect, $_POST['sba']);
    $home = mysqli_real_escape_string($connect, $_POST['home']);
    $inst = mysqli_real_escape_string($connect, $_POST['inst']);
    $comp = mysqli_real_escape_string($connect, $_POST['comp']);
    $death = mysqli_real_escape_string($connect, $_POST['death']);
    $abort = mysqli_real_escape_string($connect, $_POST['abort']);
    $age1 = mysqli_real_escape_string($connect, $_POST['age1']);
    $age2 = mysqli_real_escape_string($connect, $_POST['age2']);
    $age3 = mysqli_real_escape_string($connect, $_POST['age3']);
    $inc = mysqli_real_escape_string($connect, $_POST['inc']);
    $anc = mysqli_real_escape_string($connect, $_POST['anc']);
    $pnc = mysqli_real_escape_string($connect, $_POST['pnc']);
/*
echo $total;
echo $expert;
echo $doctor;
    echo $sba;
        echo $home;
            echo $inst;
                echo $comp;
                    echo $death;
                        echo $abort;
                            echo $age1;
                                echo $age2;
                                    echo $age3;
                                        echo $inc;
                                            echo $anc;
                                                echo $pnc;*/


    if ($expert == NULL)
        $expert = 0;
    if ($doctor == NULL)
        $doctor = 0;
    if ($sba == NULL)
        $sba = 0;
    if ($home == NULL)
        $home = 0;
    if ($inst == NULL)
        $inst = 0;
    if ($comp == NULL)
        $comp = 0;
    if ($death == NULL)
        $death = 0;
    if ($abort == NULL)
        $abort = 0;
    if ($age1 == NULL)
        $age1 = 0;
    if ($age2 == NULL)
        $age2 = 0;
    if ($age3 == NULL)
        $age3 = 0;
    if ($inc == NULL)
        $inc = 0;
    if($pnc==NULL)
        $pnc=0;
    if($anc==NULL)
        $anc=0;



    $insert_query = $connect->query("insert into pregnancy_details values($id,$total,$expert,$doctor,$sba,$home,$inst,$comp,$death,$abort,$age1,$age2,$age3,$anc,$inc,$pnc)");


    if ($insert_query>0) {
        echo '<script language="javascript">';
        echo 'alert("message successfully sent")';
        echo '</script>';

        header("Location: ../pregnancy.php");
    } else
        echo '<script>alert("Problem Inserting Data")</script>';
}

$connect->close();
?>