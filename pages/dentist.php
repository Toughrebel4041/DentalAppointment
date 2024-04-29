<?php
require_once('./class/class.Dentist.php');
$objDentist = new Dentist();
if(isset($_POST['btnSubmit'])){
    $objDentist->dentistID = $_POST['dentistID'];
    $objDentist->fname = $_POST['fname'];
    $objDentist->lname = $_POST['lname'];
    $objDentist->sex = $_POST['sex'];
    $objDentist->licenseID = $_POST['licenseID'];
    $objDentist->email = $_POST['email'];
    $objDentist->telp = $_POST['telp'];
    $objDentist->address = $_POST['address'];
    $objDentist->username = $_POST['username'];
    $objDentist->password = $_POST['password'];

    if(isset($_GET['ssn'])){
        $objDentist->ssn = $_GET['ssn'];
        $objDentist->UpdateDentist();
    } else {
     $objDentist->AddDentist();
    }
    echo "<script> alert('$objDentist->message'); </script>";
    if($objDentist->hasil){
        echo '<script> window.location = "index.php?p=dentistlist";</script>';
    }
} else if (isset($_GET['ssn'])){
        $objDentist->ssn = $_GET['ssn'];
        $objDentist->SelectOneDentist();
    }
?>
<h4 class="title">
    <span class="text">
        <strong>Dentist</strong>
    </span>
</h4>
<form action="" method="post">
    <table class="table">
        <tr>
        <td>SSN</td>
        <td>:</td>
        <td><input type="text" class="form-control" name="ssn" value="<?php echo $objDentist->ssn; ?>"></td>
    </tr>
    <tr>
        <td>First Name</td>
        <td>:</td>
        <td><input type="text" class="form-control" ssn="fname" name="fname" value="<?php echo $objDentist->fname; ?>"></td>
    </tr>    
    <tr>
        <td>Last Name</td>
        <td>:</td>
        <td><input type="text" class="form-control" ssn="lname" name="lname" value="<?php echo $objDentist->lname; ?>"></td>
    </tr>    
    <tr>
        <td>Sex</td>
        <td>:</td>
        <td><input type="text" class="form-control" ssn="sex" name="sex" value="<?php echo $objDentist->sex; ?>"></td>
    </tr>    
    <tr>
        <td>Practice License ID</td>
        <td>:</td>
        <td><input type="text" class="form-control" ssn="licenseID" name="licenseID" value="<?php echo $objDentist->licenseID; ?>"></td>
    </tr>   
    <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="text" class="form-control" ssn="email" name="email" value="<?php echo $objDentist->email; ?>"></td>
    </tr>
    <tr>
        <td>Telephone</td>
        <td>:</td>
        <td><input type="text" class="form-control" ssn="telp" name="telp" value="<?php echo $objDentist->telp; ?>"></td>
    </tr>
    <tr>
        <td>Address</td>
        <td>:</td>
        <td><textarea class="form-control" name="address" rows="3" cols="19">
        <?php echo $objDentist->address; ?></textarea></td>
    </tr>
    <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" class="form-control" ssn="username" name="username" value="<?php echo $objDentist->username; ?>"></td>
    </tr>   
    <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="text" class="form-control" ssn="password" name="password" value="<?php echo $objDentist->password; ?>"></td>
    </tr>   
    <tr>
        <td colspan="2"></td>
        <td><input type="submit" class="btn btn-success" value="Save" name="btnSubmit">
            <a href="index.php?p=Dentistlist" class="btn btn-warning">Cancel</a>
        </td>
    </tr>
    </table>
</form>