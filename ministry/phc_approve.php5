<?php 

//if (isset($_GET['email'])) {
//$to = $_GET['email'];
$to = "rashmimshewale11@gmail.com";
$subject = "Your account has been validated";
$message = "hiii ! Your password is : rashmi@123";
//$from = "rashmimshewale11@gmail.com";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: <sonawanesnehal41@gmail.com>' . "\r\n";
$headers .= 'Cc: ashutosh.danwe91297@gmail.com' . "\r\n";
//$headers = "From : $from";
//mail("mapara.shubham@gmail.com", "Rashmi", "This is test mail");
mail($to, $subject, $message, $headers);
echo "<script>console.log('Mail send')</script>";
//}

?>

