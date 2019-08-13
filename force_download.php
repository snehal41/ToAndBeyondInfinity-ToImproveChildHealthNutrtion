
<?php
if(isset($_POST['file_name'])){
/*$file = $_POST['file_name'];
$file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
*/
 $file = rand(1000,100000)."-".$_FILES['file_name']['name'];
 $file_type = $_FILES['file_name']['type'];

    // Add a file type check here for security purposes so that nobody can-
    // download PHP files or other sensitive files from your server by spoofing this script
    header('Content-type: video/mp4');
    header('Content-Disposition: attachment; filename="'.$file.'"');
    readfile('phc_files/'.$file);
    exit();
}
?>
