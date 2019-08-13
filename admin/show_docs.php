<?php
$phc_id  = $_GET['id'];
include 'dbconfig.php';

$sql = "SELECT * FROM  userfiles where PHCid = $phc_id";
$result = $conn->query($sql);
echo "hii";
if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();
}
$name = $row["FileName"];
$path = $row["FilePath"];
$type = $row["FileType"];
echo "<script>console.log('$name')</script>";
echo "<script>console.log('$path')</script>";
echo "<script>console.log('$type')</script>";
header('Content-type: "' . $type . '"');
header('Content-Disposition: inline; filename="' . $name . '"');
header('Content-Transfer-Encoding: binary');
@readfile($path);

mysqli_close($connect);
?>
