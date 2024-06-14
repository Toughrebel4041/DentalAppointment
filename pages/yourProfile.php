<div>
<br>
<br>
<h4 class="title">
    <span class="text">
        <strong>Patient View</strong>
    </span>
</h4>
<br>

<a class="btn btn-primary" href="adminhome.php?p=user">Add</a>
<table class="table table-bordered">
    <tr>
        <th>No.</th>
        <th>User ID</th>
        <th>Patient ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Sex</th>
        <th>Address</th>
        <th>Email</th>
        <th>Telephone</th>
        <th>Dental Record</th>
    </tr>
    <?php
    require_once('./class/class.Patient.php');
    $objPatient = new Patient();
    $arrayResult = $objPatient->SelectYourProfile();
    if(count($arrayResult) == 0){
        echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
    } else {
        $no = 1;
        foreach ($arrayResult as $dataPatient) {
            echo '<tr>';
            echo '<td>'.$no.'</td>';
            echo '<td>'.$dataPatient->user->userId.'</td>';
            echo '<td>'.$dataPatient->patientID.'</td>';
            echo '<td>'.$dataPatient->fname.'</td>';
            echo '<td>'.$dataPatient->lname.'</td>';
            echo '<td>'.$dataPatient->sex.'</td>';
            echo '<td>'.$dataPatient->address.'</td>';
            echo '<td>'.$dataPatient->email.'</td>';
            echo '<td>'.$dataPatient->telp.'</td>';
            echo '<td>'.$dataPatient->dentalRecord.'</td>';
            echo '<td><a class="btn btn-warning" href="adminhome.php?p=user&userid='.$dataPatient->user->userId.'"> Edit </a> | <a class="btn btn-danger" href="adminhome.php?p=deleteuser&userid='.$dataPatient->user->usersId.'"onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')">Delete </a> </td>';
            echo '</tr>';
            $no++;
        }
    }
    ?>
</table>
</div>