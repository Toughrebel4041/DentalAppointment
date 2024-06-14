<?php
require_once dirname(__FILE__) . '/../vendor/autoload.php';

// require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class Mail {
    public static function SendMail($to, $name, $subject, $message) {
        $mail = new PHPMailer(true);
        try {
            // Pengaturan server SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.example.com'; // Ganti dengan host SMTP Anda
            $mail->SMTPAuth = true;
            $mail->Username = 'radityaaiman.permana@students.esqbs.ac.id'; 
            $mail->Password = ''; 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Pengirim
            $mail->setFrom('radityaaiman.permana@students.esqbs.ac.id', 'radi');

            // Penerima
            $mail->addAddress($to, $name);

            // Konten email
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $message;

            // Kirim email
            $mail->send();
            echo 'Pesan berhasil dikirim';
        } catch (Exception $e) {
            echo "Pesan tidak dapat dikirim. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
?>
