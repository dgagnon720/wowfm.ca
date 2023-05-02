<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Votre nom est requis ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Un courriel est requis ";
} else {
    $email = $_POST["email"];
    $courriel = "krouault@radiox.com";
}

// MSG SUBJECT
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "Un sujet est requis ";
} else {
    $msg_subject = $_POST["msg_subject"];
}


// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Un message est requis ";
} else {
    $message = $_POST["message"];
}


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer.php';
require 'SMTP.php';

$Body = "";
$Body .= "<bold>Nom de l'auditeur: </bold>";
$Body .= $name;
$Body .= "<p>";
$Body .= "<bold>Courriel de l'auditeur: </bold>";
$Body .= $email;
$Body .= "<p>";
$Body .= "<bold>Sujet: </bold>";
$Body .= $msg_subject;
$Body .= "<p>";
$Body .= "<bold>Message: </bold>";
$Body .= $message;
$Body .= "<p>";

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.office365.com';
$mail->Port       = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth   = true;
$mail->Username = 'krouault@radiox.com';
$mail->Password = 'Images.2010?';
$mail->SetFrom('krouault@radiox.com', 'FromEmail');
$mail->addAddress('charles.rainville@919sports.ca', 'ToEmail');
$mail->IsHTML(true);

$mail->Subject = 'Message du site web WOWFM.CA';
$mail->Body    = $Body;
$mail->AltBody = $Body;

if(!$mail->send()) {
    echo "Une erreur est survenue :(";
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo "Merci de votre commentaire. Nous avons reçu votre courriel !";
}



?>
