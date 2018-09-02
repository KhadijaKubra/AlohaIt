<?php
  // $name=$_POST['name'];
// $email=$_POST['email'];
// $telnum=$_POST['telnum'];
// $msg=$_POST['msg'];
// $msg=wordwrap($msg,70);
  $sub=$name." ".$telnum;
 
//mail("$email","$sub","$msg")


 $mailto = 'm.ref4t@gmail.com';
    $mailSub = $_POST['name'];
    $mailMsg = $sub;
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 1;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "sitework003@gmail.com";
   $mail ->Password = "alohait123";
   $mail ->SetFrom("yourmail@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }
?>