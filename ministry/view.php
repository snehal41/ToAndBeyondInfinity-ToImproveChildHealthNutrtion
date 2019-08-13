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

		} 		
		$sql = "SELECT * FROM  digital_resources";
		$result = $connect->query($sql);
		
		?>
		<table>
			<?php
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					?>
					<tbody>
						<tr>
							<td> <?php echo $row["id"] ?></td>
							<td><a href="show_doc.php?id=<?php echo $row['id']?>">View file</a></td>

						</tr>
					</tbody>
					<?php
				}
			} else {
				echo "0 results";
			}
			mysqli_close($connect);
		?>
	</table>
</body>
</html>
