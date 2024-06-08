<br>
<br>
<h4 class="title">
    <span class="text">
        <strong>Dentist List</strong>
    </span>
</h4>
<a class="btn btn-primary" href="index.php?p=dentist">Add</a>
<br>
<br>
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
            echo '<td><a class="btn btn-warning" href="adminhome.php?p=dentist&dentistID='.$dataDentist->dentistID.'"> Edit </a> | <a class="btn btn-danger" href="adminhome.php?p=deleteDentist&ssn='.$dataDentist->dentistID.'"onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')">Delete </a> </td>';
            echo '</tr>';
            $no++;
        }
    }
    ?>
</table>