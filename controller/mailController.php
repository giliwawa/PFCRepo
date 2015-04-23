<?php
require '../phpmailer/PHPMailerAutoload.php';

function sendMail($name,$maill,$message)
{
    $mail = new PHPMailer;
    $msg = wordwrap($message,70);
    $mail->Debugoutput = 'html';
    // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'unicornsesprit@gmail.com';                 // SMTP username
    $mail->Password = 'unicorns_esprit';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    $mail->From = $maill;   
    $mail->addAddress('unicornsesprit@gmail.com');               // Name is optional
    $mail->Subject = 'Contact form';
    $mail->Body    = $message;
    if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
}

if(isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['msg']))
{
    sendMail($_POST['nom'], $_POST['mail'], $_POST['msg']);
                                
}

$url = $_SERVER['HTTP_REFERER'];
header('location:'.$url);