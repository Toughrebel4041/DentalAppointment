<br>
<br>
<h4 class="title">
    <span class="text">
        <strong>Appointment List</strong>
    </span>
</h4>
<a class="btn btn-primary" href="index.php?p=dentist">Add</a>
<br>
<br>
<table class="table table-bordered">
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>ID Appointment</th>
        <th>ID Dentist</th>
        <th>ID Pasien</th>
        <th>Tangga;</th>
        <th>Waktu</th>
        <th>Keluhan</th>
        <th>ID Treatment</th>
    </tr>
    <?php
    require_once('./class/class.Appointment.php');
    $objAppointment = new Appointment();
    $arrayResult = $objAppointment->SelectAllAppointment();
    if(count($arrayResult) == 0){
        echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
    } else {
        $no = 1;
        foreach ($arrayResult as $dataAppointment) {
            echo '<tr>';
            echo '<td>'.$no.'</td>';
            echo '<td>'.$dataAppointment->name.'</td>';
            echo '<td>'.$dataAppointment->appointmentID.'</td>';
            echo '<td>'.$dataAppointment->dentistID.'</td>';
            echo '<td>'.$dataAppointment->patientID.'</td>';
            echo '<td>'.$dataAppointment->date.'</td>';
            echo '<td>'.$dataAppointment->time.'</td>';
            echo '<td>'.$dataAppointment->keluhan.'</td>';
            echo '<td>'.$dataAppointment->treatmentID.'</td>';
            echo '<td><a class="btn btn-warning" href="dentisthome.php?p=book&appointmentID='.$dataAppointment->dataAppointment.'"> Edit </a> | <a class="btn btn-danger" href="dentisthome.php?p=deleteAppointmnet&ssn='.$dataAppointment->dataAppointment.'"onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')">Delete </a> </td>';
            echo '</tr>';
            $no++;
        }
    }
    ?>
</table>