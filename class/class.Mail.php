<?php
require_once dirname(__FILE__) . '/../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mail
{
    public static function SendMail($to, $name, $subject, $message)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;
        $mail->Username = "suryandaripuspita.hartiati@students.esqbs.ac.id";
        $mail->Password = "";
        $mail->From = "suryandaripuspita.hartiati@students.esqbs.ac.id";
        $mail->FromName = "desury";
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->WordWrap = 50;
        $mail->IsHTML(true);

        $mail->AddAddress($to, $name);
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->AltBody = "This is the body in plain text for non-HTML mail clients";
        $mail->SMTPDebug = 0;

        if (!$mail->Send()) {
            echo "Message could not be sent.<p>";
            echo "Mailer Error : " . $mail->ErrorInfo;
            exit;
        }
    }
}
