<html>
<body>

<?php if(isset($_POST["sub"])) { ?>
    <ul>
        <li>File size: <?php echo $_FILES['anyfile']['size'];  ?>
        <li>File type: <?php echo $_FILES['anyfile']['type'] ?>
        <li>Sent file: <?php echo $_FILES['anyfile']['name'];  ?>
    </ul>
<?php
$getphcid=$_POST['PHCid'];
$conn = mysqli_connect("localhost","root","komal123","sih");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$uploadThisFile = true;
$errors = array();

$bytes = 1024;
$allowedKB = 200;
$totalBytes = $allowedKB * $bytes;

$file_name = $_FILES['anyfile']['name'];
$file_size = $_FILES['anyfile']['size'];
$file_tmp = $_FILES['anyfile']['tmp_name'];
$file_type = $_FILES['anyfile']['type'];
$file_ext=pathinfo($file_name,PATHINFO_EXTENSION);
$phc_id=$_POST["phc_id"];
$folder="phc_files/". basename($file_name);

$extensions= array("jpeg","jpg","png","xls","pdf","doc","mp4");

if(in_array($file_ext,$extensions) === false){
    $errors[]="extension not allowed, please choose a specified file.";
}

if($file_size > $totalBytes){
    $errors[]='File size must be below specified size';
}

if(empty($errors)==true){
echo $folder;
if(move_uploaded_file($file_tmp,$folder)){


$query = "INSERT INTO userfiles(FilePath,FileName,phc_id,FileType) VALUES('$folder','$file_name','$phc_id','$file_type')";
mysqli_query($conn, $query);
?>
    <script type="text/javascript">
        alert('Successfully Uploaded');
    </script>
    <?php
    header("Location: view.php?success");
}
}else{
    foreach($errors as $error){
        echo $error."<br/>";
    }
    session_start();
    $_SESSION['error_array'] = $errors;
    header("Location: view.php?error");

    ?>
    <?php
}
    mysqli_close($conn);
} ?>

</body>
</html>