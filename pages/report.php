<?php
  require './../inc.koneksi.php';
  require './../class/class.Appointment.php';

require_once dirname(__FILE__) . '/../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;


$appointmentId = '1';

// if (isset($_GET['appointmentId'])){
//   $appointmentId = $_GET['appointmentId'];
// }
// var_dump($appointmentId);


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
$content .= '<tr>
     <th>Nama Pasien</th>
     <td>: ' . $appointmentData['patientName'] . '</td>
</tr>';
$content .= '<tr>
     <th>Tanggal Appointment</th>
     <td>: ' . $appointmentData['appointmentDate'] . '</td>
</tr>';
$content .= '<tr>
     <th>Jam Appointment</th>
     <td>: ' . $appointmentData['appointmentTime'] . '</td>
</tr>';
$content .= '<tr>
     <th>Dokter</th>
     <td>: ' . $appointmentData['dentistName'] . '</td>
</tr>';
$content .= '<tr>
     <th>Tindakan</th>
     <td>: ' . $appointmentData['treatment'] . '</td>
</tr>';
$content .= '<tr>
     <th>Biaya</th>
     <td>: ' . $appointmentData['fee'] . '</td>
</tr>';
$content .= '</table>';
$content .= '<div id="footer">
  <p>Dicetak pada: ' . date('Y-m-d H:i:s') . '</p>
</div>';

$content .= '<p>Terima kasih atas kunjungan Anda.</p>';

$html2pdf = new Html2Pdf('P', 'A4', 'fr');
$html2pdf->setDefaultFont('Arial');
$html2pdf->writeHTML($content);
if (ob_get_contents()) {
  ob_end_clean();
}

$html2pdf->output('appointment-dental.pdf');
