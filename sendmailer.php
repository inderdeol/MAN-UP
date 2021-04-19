<?php

/* Namespace alias (don't need Exception this time). */
use PHPMailer\PHPMailer\PHPMailer;

/* Include the Composer generated autoload.php file. */
require 'vendor\autoload.php';

/* Create a new PHPMailer object. */
$mail = new PHPMailer();

/* Set the mail sender. */
$mail->setFrom('darth@empire.com', 'Darth Vader');

/* Add a recipient. */
$mail->addAddress('palpatine@empire.com', 'Emperor');

/* Set the subject. */
$mail->Subject = 'Force';

/* Set the mail message body. */
$mail->Body = 'There is a great disturbance in the Force.';

/* Finally send the mail. */
if (!$mail->send())
{
   /* PHPMailer error. */
   echo $mail->ErrorInfo;
}
