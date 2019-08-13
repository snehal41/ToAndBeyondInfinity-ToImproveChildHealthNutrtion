<?php

ini_set("SMTP","127.0.0.1");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","25");

// Please specify the return address to use
ini_set('sendmail_from', 'sonawanesnehal41@gmail.com');
            $headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Snehal <sonawanesnehal41@gmail.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 


            $to = "sonawanesnehal41@gmail.com";
            $subject = "regarding hackthom";
            $email_body = "brech kahi khai...";

            mail($to, $subject, $email_body,$headers);
        ?>