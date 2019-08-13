<html>
<body>
<?php
if(isset($_GET["error"])){
    session_start();
    $errors = $_SESSION['error_array'];

    $count = count($errors);

    if($count != 0){
        foreach($errors as $error){
            echo $error."<br/>";
        }
    }
}else{
include 'dbconfig.php';
if ($connect->connect_error) {
    die("Connection failed: ". $connect->connect_error);
}
$sql = "SELECT * FROM  userfiles";
$result = $connect->query($sql);
?>
<table>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            ?>
            <tbody>
            <tr>
                <td> <?php echo $row["PHCid"] ?></td>
                <td><a href="show_docs.php?id=<?php echo $row['PHCid']?>" target="_blank">View file</a></td>
            </tr>
            </tbody>
            <?php
        }
    } else {
        echo "0 results";
    }
    mysqli_close($connect);
    }
    ?>
</table>
</body>
</html>