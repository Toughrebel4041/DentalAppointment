<?php
ob_start();
require_once('./class/class.Patient.php');
require_once('./class/class.User.php');

$objPatient = new Patient();
$objUser = new User();
if (isset($_SESSION['userid'])) {
    $objPatient->userid = $_SESSION['userid'];
} else {
    echo "<script> alert('User not logged in'); </script>";
    echo '<script> window.location = "login.php";</script>';
    exit();
}

if (isset($_POST['btnSubmit'])) {
    $objPatient->fname = $_POST['fname'];
    $objPatient->lname = $_POST['lname'];
    $objPatient->sex = $_POST['sex'];
    $objPatient->address = $_POST['address'];
    $objPatient->email = $_POST['email'];
    $objPatient->telp = $_POST['telp'];
    $objPatient->dentalRecord = $_POST['dentalRecord'];
    $objPatient->user->userid = $_POST['userid'];  // Use the correct user ID from the session

    if(isset($_GET['patientID'])){
        $objPatient->patientID = $_GET['patientID'];
        $objPatient->UpdatePatient();
    } else {
     $objPatient->AddPatient();
    }
    echo "<script> alert('$objPatient->message'); </script>";
    if($objPatient->hasil){
        echo '<script> window.location = "userhome.php?p=home";</script>';
    }
} else if (isset($_GET['patientID'])){
        $objPatient->patientID = $_GET['patientID'];
        $objPatient->SelectOnePatient();
    }
?>
<h4 class="title">
    <span class="text">
        <strong>User</strong>
    </span>
</h4>
<form action="" method="post">
    <table class="table">
        <tr>
        <td>User ID</td>
        <td>:</td>
        <td><input readonly="readonly" type="text" class="form-control" name="userid" value="<?php echo $objPatient->userid; ?>"></td>
    </tr>
        <tr>
        <td>Patient ID</td>
        <td>:</td>
        <td><input readonly="readonly" type="text" class="form-control" name="patientID" value="<?php echo $objPatient->patientID; ?>"></td>
    </tr>
    <tr>
        <td>First Name</td>
        <td>:</td>
        <td><input type="text" class="form-control" userid="fname" name="fname" value="<?php echo $objPatient->fname; ?>"></td>
    </tr>    
    <tr>
        <td>Last Name</td>
        <td>:</td>
        <td><input type="text" class="form-control" userid="lname" name="lname" value="<?php echo $objPatient->lname; ?>"></td>
    </tr>    
    <tr>
        <td>Sex</td>
        <td>:</td>
        <td><input type="radio" name="sex" value="M" /> Male <br />
        <input type="radio" name="sex" value="F" /> Female</td>
    </tr> 
    <tr>
        <td>Address</td>
        <td>:</td>
        <td><input type="text" class="form-control" userid="address" name="address" value="<?php echo $objPatient->address; ?>"></td>
    </tr>   
    <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="email" class="form-control" userid="email" name="email" value="<?php echo $objPatient->email; ?>"></td>
    </tr>   
    <tr>
        <td>Telephone</td>
        <td>:</td>
        <td><input type="tel" class="form-control" userid="telp" name="telp" value="<?php echo $objPatient->telp; ?>"></td>
    </tr>   
    <tr>
        <td>Dental Record</td>
        <td>:</td>
        <td><input type="text" class="form-control" userid="dentalRecord" name="dentalRecord" value="<?php echo $objPatient->dentalRecord; ?>"></td>
    </tr>   
    <tr>
        <td colspan="2"></td>
        <td><input type="submit" class="btn btn-success" value="Save" name="btnSubmit">
            <a href="adminhome.php?p=userList" class="btn btn-warning">Cancel</a>
        </td>
    </tr>
    </table>
</form>