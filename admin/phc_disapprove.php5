<?php
/**
 * Created by IntelliJ IDEA.
 * User: rashmi
 * Date: 25/2/19
 * Time: 5:22 PM
 */

include 'dbconfig.php5';

    if(isset($_GET['phcid']))
        $i=$_GET['phcid'];
$sqli="UPDATE phcregister set Status1=2 where PHCid=$i";
$result=$conn->query($sqli);
$email = $_GET['email'];
$remark = $_GET['remark'];
echo "<script>console.log('$i')</script>";
echo "<script>console.log('$email')</script>";
echo "<script>console.log('$remark')</script>";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-6.0.3/src/Exception.php';
require 'PHPMailer-6.0.3/src/PHPMailer.php';
require 'PHPMailer-6.0.3/src/SMTP.php';

$mail = new PHPMailer(TRUE);

try {

    $mail->setFrom('kaaate009@gmail.com', 'Kaate Master');
    $mail->addAddress($email, 'sender_name');
    $mail->Subject = 'Reason to rejection';
    $mail->Body = 'You are rejected beacuse :' .$remark. 'Please Reapply';

    /* SMTP parameters. */
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'kaaate009@gmail.com';
    $mail->Password = 'Tiger@123@1';
    $mail->Port = 587;

    /* Disable some SSL checks. */
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    /* Finally send the mail. */
    $mail->send();
}
catch (Exception $e)
{
    echo $e->errorMessage();
}
catch (Exception $e)
{
    echo $e->getMessage();
}

if ($result) {
   header("location:phcReq.php5");
}
$conn->close();

?>







if($result)
{
    //header("location:phcReq.php5");
}
$conn->close();
?>