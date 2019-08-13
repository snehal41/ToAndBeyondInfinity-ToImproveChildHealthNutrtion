<?php
 session_start();
      //$username=$_SESSION['user'];
      $conn = mysqli_connect("localhost", "root", "root", "sih");
if(isset($_POST['btn-upload']))
{    
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="pdf/";
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 $a=$_POST["display"];
 $b=$_POST["date"];
 $c=$_POST["desc"];
 $d=$_SESSION['user']['username'];

 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  //INSERT INTO `news` (`id`, `Display`, `File`, `type`, `size`, `expire_d`, `descr`, `uploadedby`)
  $sql="INSERT INTO  news(Display,File,type,size,expire_d,descr,uploadedby) VALUES('$a','$final_file','$file_type','$new_size','$b','$c','$d')";
  mysqli_query($conn,$sql);
  ?>
  <script>
  alert('successfully uploaded');
        window.location.href='news.php?success';
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='news.php?fail';
        </script>
  <?php
 }
}
?>

