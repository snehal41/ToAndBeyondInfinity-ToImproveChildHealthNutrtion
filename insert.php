<?php
include 'dbconfig.php';

if (isset($_POST['sub'])) {
    $PHCid = mysqli_real_escape_string($connect, $_POST['PHCid']);
    $PHCName = mysqli_real_escape_string($connect, $_POST['PHCName']);
    $firstname = mysqli_real_escape_string($connect, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($connect, $_POST['lastname']);
    $phoneno = mysqli_real_escape_string($connect, $_POST['phoneno']);
    $line1 = mysqli_real_escape_string($connect, $_POST['line1']);
    $line2 = mysqli_real_escape_string($connect, $_POST['line2']);
    $state = mysqli_real_escape_string($connect, $_POST['state']);
    $dist = mysqli_real_escape_string($connect, $_POST['dist']);
    $tal = mysqli_real_escape_string($connect, $_POST['tal']);
    $vil = mysqli_real_escape_string($connect, $_POST['vil']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $beds = mysqli_real_escape_string($connect, $_POST['bed']);
    $labs = mysqli_real_escape_string($connect, $_POST['labs']);
    $ambulances = mysqli_real_escape_string($connect, $_POST['Ambulances']);
    $labourrooms = mysqli_real_escape_string($connect, $_POST['labourrooms']);
    $dservices = mysqli_real_escape_string($connect, $_POST['Dservices']);
    $deliveryrooms = mysqli_real_escape_string($connect, $_POST['deliveryrooms']);
    $nutrition = mysqli_real_escape_string($connect, $_POST['nutrition']);
    $femalestaff = mysqli_real_escape_string($connect, $_POST['femalestaff']);
    $cfacilities = mysqli_real_escape_string($connect, $_POST['communicationfacilities']);
    $noticeboard = mysqli_real_escape_string($connect, $_POST['noticeboard']);
    $pharma = mysqli_real_escape_string($connect, $_POST['pharmas']);
    $password = mysqli_real_escape_string($connect, $_POST['Password']);
    /*Upload_on :use NOW()
      Status1=0  */

    $uploadThisFile = true;
    $errors= array();

    $bytes = 1024;
    $allowedKB = 200;
    $totalBytes = $allowedKB * $bytes;

    $file_name = $_FILES['anyfile']['name'];
    $file_size = $_FILES['anyfile']['size'];
    $file_tmp = $_FILES['anyfile']['tmp_name'];
    $file_type = $_FILES['anyfile']['type'];
    $file_ext=pathinfo($file_name,PATHINFO_EXTENSION);
    //$phc_id=$_POST["phc_id"];
    $folder="phc_files";

    $extensions= array("jpeg","jpg","png","xls","pdf","doc");

    if(in_array($file_ext,$extensions) === false){
        $errors[]="extension not allowed, please choose a specified file.";
    }

    if($file_size > $totalBytes){
        $errors[]='File size must be below specified size';
    }

    /*if(empty($errors)==true){*/
        if(move_uploaded_file($file_tmp,"$folder/".$file_name)){

            $sql="INSERT INTO phcregister (PHCid, PHCname, Mfirstname,Mlastname,Phoneno,Addline1,Addline2,State,District,Taluka,Village,Email,Beds,Labs,Ambulances,Labourrooms,Dservices,Deliveryrooms,Nutrition,Femalestaff,Commfacilities,Noticeboard,Pharma,Password1,Upload_on,Status1) VALUES ('$PHCid', '$PHCName', '$firstname','$lastname','$phoneno','$line1','$line2','$state','$dist','$tal','$vil','$email','$beds','$labs','$ambulances','$labourrooms','$dservices','$deliveryrooms','$nutrition','$femalestaff','$cfacilities','$noticeboard','$pharma','$password',NOW(),'0')";
            $sql1="INSERT INTO userfiles(PHCid,FilePath,FileName,FileType) VALUES('$PHCid','$folder','$file_name','$file_type')";
            mysqli_query($connect, $sql);
            mysqli_query($connect, $sql1);
            ?>
            <script>
                alert('Form Sent For Verification...!Check Email for Further Details..!');
                window.location.href='index.php?success';
            </script>
            <?php
        }
    }
mysqli_close($connect);
 ?>