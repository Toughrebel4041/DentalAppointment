<?php
require_once('./class/class.Dentist.php');
$objDentist = new Dentist();
if(isset($_POST['btnSubmit'])){
    $objDentist->dentistID = $_POST['dentistID'];
    $objDentist->fname = $_POST['fname'];
    $objDentist->lname = $_POST['lname'];
    $objDentist->sex = $_POST['sex'];
    $objDentist->address = $_POST['address'];
    $objDentist->licenseID = $_POST['licenseID'];
    $objDentist->email = $_POST['email'];
    $objDentist->telp = $_POST['telp'];
    $objDentist->userid = $_POST['userid'];

    if(isset($_GET['dentistID'])){
        $objDentist->dentistID = $_GET['dentistID'];
        $objDentist->UpdateDentist();
    } else {
     $objDentist->AddDentist();
    }
    echo "<script> alert('$objDentist->message'); </script>";
    if($objDentist->hasil){
        echo '<script> window.location = "adminhome.php?p=dentistList";</script>';
    }
} else if (isset($_GET['dentistID'])){
        $objDentist->dentistID = $_GET['dentistID'];
        $objDentist->SelectOneDentist();
    }
?>
<br>
<br>
<h4 class="title">
    <span class="text">
        <u>
        <strong>Add New Dentist Data</strong>
    </u>
    </span>
</h4>
<br>
<form action="" method="post">
    <table class="table">
        <tr>
        <td>Dentist ID</td>
        <td>:</td>
        <td><input type="text" class="form-control" name="dentistID" value="<?php echo $objDentist->dentistID; ?>"></td>
    </tr>
    <tr>
        <td>First Name</td>
        <td>:</td>
        <td><input type="text" class="form-control" dentistID="fname" name="fname" value="<?php echo $objDentist->fname; ?>"></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td>:</td>
        <td><input type="text" class="form-control" dentistID="lname" name="lname" value="<?php echo $objDentist->lname; ?>"></td>
    </tr>  
    <tr>
        <td>Sex</td>
        <td>:</td>
        <td><input type="text" class="form-control" dentistID="sex" name="sex" value="<?php echo $objDentist->sex; ?>"></td>
    </tr>    
    <tr>
        <td>Address</td>
        <td>:</td>
        <td><textarea class="form-control" name="address" rows="3" cols="19">
        <?php echo $objDentist->address; ?></textarea></td>
    </tr>  
    <tr>
        <td>License ID</td>
        <td>:</td>
        <td><input type="text" class="form-control" dentistID="licenseID" name="licenseID" value="<?php echo $objDentist->licenseID; ?>"></td>
    </tr>   
    <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="email" class="form-control" dentistID="email" name="email" value="<?php echo $objDentist->email; ?>"></td>
    </tr>
    <tr>
        <td>Telephone</td>
        <td>:</td>
        <td><input type="tel" class="form-control" dentistID="telp" name="telp" value="<?php echo $objDentist->telp; ?>"></td>
    </tr>
    <tr>
        <td>User ID</td>
        <td>:</td>
        <td><input type="text" class="form-control" dentistID="userid" name="userid" value="<?php echo $objDentist->user->userid; ?>"></td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <td><input type="submit" class="btn btn-success" value="Save" name="btnSubmit">
            <a href="adminhome.php?p=dentistList" class="btn btn-warning">Cancel</a>
        </td>
    </tr>
    </table>
</form>