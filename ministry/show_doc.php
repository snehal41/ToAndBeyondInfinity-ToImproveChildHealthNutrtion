<html>
<body>
	<?php
	$phc_id  = $_GET['id'];
	echo $phc_id;
	include 'dbconfig.php';		
	$sql = "SELECT * FROM  userfiles where id='$phc_id'";
	$result = $connect->query($sql);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
	}
	$name = $row["FileName"];
	$path = $row["FilePath"];
	$type = $row["FileType"];
	
	header('Content-type: "' . $type . '"');
	header('Content-Disposition: inline; filename="' . $name . '"');
	header('Content-Transfer-Encoding: binary');
	@readfile($path);

	mysqli_close($connect);
	?>
	
</body>
</html>
