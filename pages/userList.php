<div>
<br>
<br>
<h4 class="title">
    <span class="text">
        <strong>All User List</strong>
    </span>
</h4>
<br>

<a class="btn btn-primary" href="adminhome.php?p=user">Add</a>
<table class="table table-bordered">
    <tr>
        <th>No.</th>
        <th>User ID</th>
        <th>Email</th>
        <th>Name</th>
        <th>Role</th>
        <th>Username</th>
    </tr>
    <?php
    require_once('./class/class.User.php');
    $objUser = new User();
    $arrayResult = $objUser->SelectAllUser();
    if(count($arrayResult) == 0){
        echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
    } else {
        $no = 1;
        foreach ($arrayResult as $dataUser) {
            echo '<tr>';
            echo '<td>'.$no.'</td>';
            echo '<td>'.$dataUser->userid.'</td>';
            echo '<td>'.$dataUser->email.'</td>';
            echo '<td>'.$dataUser->name.'</td>';
            echo '<td>'.$dataUser->role.'</td>';
            echo '<td>'.$dataUser->username.'</td>';
            echo '<td><a class="btn btn-warning" href="adminhome.php?p=user&userid='.$dataUser->userid.'"> Edit </a> | <a class="btn btn-danger" href="adminhome.php?p=deleteuser&userid='.$dataUser->usersid.'"onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')">Delete </a> </td>';
            echo '</tr>';
            $no++;
        }
    }
    ?>
</table>
</div>