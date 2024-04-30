<h4 class="title">
    <span class="text">
        <strong>Dentist List</strong>
    </span>
</h4>
<a class="btn btn-primary" href="index.php?p=Dentist">Add</a>
<table class="table table-bordered">
    <tr>
        <th>No.</th>
        <th>ID Dentist</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Sex</th>
        <th>Practice License</th>
        <th>Email</th>
        <th>Telephone</th>
        <th>Address</th>
        <th>Username</th>
        <th>Password</th>
    </tr>
    <?php
    require_once('./class/class.Dentist.php');
    $objDentist = new Dentist();
    $arrayResult = $objDentist->SelectAllDentist();
    if(count($arrayResult) == 0){
        echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
    } else {
        $no = 1;
        foreach ($arrayResult as $dataDentist) {
            echo '<tr>';
            echo '<td>'.$no.'</td>';
            echo '<td>'.$dataDentist->dentistID.'</td>';
            echo '<td>'.$dataDentist->fname.'</td>';
            echo '<td>'.$dataDentist->lname.'</td>';
            echo '<td>'.$dataDentist->sex.'</td>';
            echo '<td>'.$dataDentist->licenseID.'</td>';
            echo '<td>'.$dataDentist->email.'</td>';
            echo '<td>'.$dataDentist->telp.'</td>';
            echo '<td>'.$dataDentist->address.'</td>';
            echo '<td>'.$dataDentist->username.'</td>';
            echo '<td>'.$dataDentist->password.'</td>';
            echo '<td><a class="btn btn-warning" href="index.php?p=dentist&dentistID='.$dataDentist->dentistID.'"> Edit </a> | <a class="btn btn-danger" href="index.php?p=deleteDentist&ssn='.$dataDentist->dentistID.'"onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')">Delete </a> </td>';
            echo '</tr>';
            $no++;
        }
    }
    ?>
</table>