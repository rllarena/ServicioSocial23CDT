<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

require_once 'otp.php';

if (isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'informatica.cdt.stc@gmail.com';
    $mail->Password = 'nqoctradttpzjupx';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('informatica.cdt.stc@gmail.com');

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);

    $otp = generateOTP();
    $expirationTime = time() + (2 * 60); // OTP expiration time set to 2 minutes

// Store the OTP in the database
    storeOTPInDB($otp, $expirationTime);
    echo "Generated OTP: " . $otp;

    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"] .$otp;
    $mail->AddAttachment('files/doc.pdf', 'test.pdf');


    $mail->send();

    echo
    "
    <script>
    alert($otp);
    document.location.href = 'index.php';
    </script>
    ";
}


function sendEmail($otp, $expirationTime) {

}



?>



