<?php
    $mailto = $_POST['Email'];
   require 'PHPMailer-master/PHPMailer.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "mail.antelopenepal.com";
   $mail ->Port = 465;
   $mail ->IsHTML(true);
   $mail ->Username = "info@antelopenepal.com";
   $mail ->Password = "hamropassword@antelope1";
   $mail ->SetFrom("info@antelopenepal.com");
   $mail ->Subject = 'subject';
   $mail ->Body = "You received a subscription from $mailto";
   $mail ->AddAddress('info.antelopenepal@gmail.com');

     if(!$mail->Send())
   {
       echo "mail not sent";
   }
   else
   {
       echo 'mail sent';
   }

?>

