<html>
<body>

	<?php


	if(isset($_POST["btn-upload"])) { ?>
	<ul> 
		<li>File size: <?php echo $_FILES['anyfile']['size'];  ?>
			<li>File type: <?php echo $_FILES['anyfile']['type'] ?>
				<li>Sent file: <?php echo $_FILES['anyfile']['name'];  ?>
				</ul>
				<?php
				include 'dbconfig.php';				

			}
			$uploadThisFile = true;
			$errors = array();

			$bytes = 1024;
			$allowedKB = 256;
			$totalBytes = $allowedKB * $bytes;

			$ExpiryDate = mysqli_real_escape_string($connect, $_POST['date']);
			$Category = mysqli_real_escape_string($connect, $_POST['cat']);

			$file_name = $_FILES['anyfile']['name'];
			$file_size = $_FILES['anyfile']['size'];
			$file_tmp = $_FILES['anyfile']['tmp_name'];	
			$file_type = $_FILES['anyfile']['type'];
			$file_ext=pathinfo($file_name,PATHINFO_EXTENSION);
			/*$phc_id=$_POST["phc_id"];*/
			$folder="guidance_by_ministry/". basename($file_name);

			$extensions= array("jpeg","jpg","png","xls","pdf","doc","mp4","mp3","xlsx","docx");

			if(in_array($file_ext,$extensions) === false){
				$errors[]="extension not allowed, please choose a specified file.";
			}

			if($file_size > $totalBytes){
				$errors[]='File size must be below specified size';
			}

			if(empty($errors)==true){			
				if(move_uploaded_file($file_tmp,$folder)){
					$uploadedby= "Ministry";
					$query = "INSERT INTO digital_resources(FileName,FilePath,FileType,ExpiryDate,UploadedBy,Category) VALUES ('$file_name','$folder','$file_type','$ExpiryDate','$uploadedby','$Category')";

					$result = mysqli_query($connect, $query);
					?>
					<script type="text/javascript">
					alert('Successfully Uploaded');
					</script>
					<?php
					header("Location: guidance.php?success");
				}
			}else{
				foreach($errors as $error){
					echo $error."<br/>";
				}
				session_start();
				$_SESSION['error_array'] = $errors;
				header("Location: guidance.php?error");

				?>
				<?php
			}
			mysqli_close($connect);
			?>

		</body>
		</html>