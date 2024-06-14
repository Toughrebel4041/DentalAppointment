<?php
require './../inc.koneksi.php';
require './../class/class.Appointment.php';
require_once './../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$appointmentId = '1'; // atau dapatkan dari parameter GET

$appointment = new Appointment();
$appointment->appointmentID = $appointmentId;

$appointment->SelectOneAppointment();

if (!$appointment->hasil) {
    echo '<p>Data appointment tidak ditemukan!</p>';
    exit;
}

$appointmentData = [
    'patientName' => $appointment->name,
    'appointmentDate' => $appointment->date,
    'appointmentTime' => $appointment->time,
    'dentistName' => $appointment->docter,
    'treatment' => $appointment->namaTreatment,
    'fee' => $appointment->hargaTreatment,
];

$content = '<h1>Struk Appointment Dental</h1>';
$content .= '<table border="1">';
$content .= '<tr><th>Nama Pasien</th><td>: ' . $appointmentData['patientName'] . '</td></tr>';
$content .= '<tr><th>Tanggal Appointment</th><td>: ' . $appointmentData['appointmentDate'] . '</td></tr>';
$content .= '<tr><th>Jam Appointment</th><td>: ' . $appointmentData['appointmentTime'] . '</td></tr>';
$content .= '<tr><th>Dokter</th><td>: ' . $appointmentData['dentistName'] . '</td></tr>';
$content .= '<tr><th>Tindakan</th><td>: ' . $appointmentData['treatment'] . '</td></tr>';
$content .= '<tr><th>Biaya</th><td>: ' . $appointmentData['fee'] . '</td></tr>';
$content .= '</table>';
$content .= '<div id="footer"><p>Dicetak pada: ' . date('Y-m-d H:i:s') . '</p></div>';
$content .= '<p>Terima kasih atas kunjungan Anda.</p>';

$html2pdf = new Html2Pdf('P', 'A4', 'fr');
$html2pdf->setDefaultFont('Arial');
$html2pdf->writeHTML($content);

$pdfContent = $html2pdf->output('', 'S');

$email = 'suryandaripuspita.hartati@studentesqbs.ac.id'; // Ganti dengan email penerima

$mail = new PHPMailer(true);

try {
   
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;
    $mail->Username = 'radityaaiman.permana@studentesqbs.ac.id'; 
    $mail->Password = 'Esqbs165*'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

  
    $mail->setFrom('radityaaiman.permana@studentesqbs.ac.id', 'radi'); 

   
    $mail->addStringAttachment($pdfContent, 'appointment-dental.pdf');

    
    $mail->isHTML(true);
    $mail->Subject = 'Struk Appointment Dental';
    $mail->Body    = 'Berikut adalah struk appointment dental Anda.';

    $mail->send();
    echo 'Pesan berhasil dikirim';
} catch (Exception $e) {
    echo "Pesan tidak dapat dikirim. Mailer Error: {$mail->ErrorInfo}";
}
?>
