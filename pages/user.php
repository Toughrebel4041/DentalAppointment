<?php
require_once('./class/class.User.php');
$objUser = new User();
if(isset($_POST['btnSubmit'])){
    $objUser->userid = $_POST['userid'];
    $objUser->email = $_POST['email'];
    $objUser->name = $_POST['name'];
    $objUser->role = $_POST['role'];
    $objUser->username = $_POST['username'];

    if(isset($_GET['userid'])){
        $objUser->userid = $_GET['userid'];
        $objUser->UpdateUser();
    } else {
     $objUser->AddUser();
    }
    echo "<script> alert('$objUser->message'); </script>";
    if($objUser->hasil){
        echo '<script> window.location = "adminhome.php?p=userList";</script>';
    }
} else if (isset($_GET['userid'])){
        $objUser->userid = $_GET['userid'];
        $objUser->SelectOneUser();
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
        <td><input readonly="readonly" type="text" class="form-control" name="userid" value="<?php echo $objUser->userid; ?>"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="email" class="form-control" userid="email" name="email" value="<?php echo $objUser->email; ?>"></td>
    </tr>    
    <tr>
        <td>Name</td>
        <td>:</td>
        <td><input type="text" class="form-control" userid="name" name="name" value="<?php echo $objUser->name; ?>"></td>
    </tr>    
    <tr>
        <td>Role</td>
        <td>:</td>
        <td>
            <select name="role" id="role">
	        <option value="">--- Choose a Role ---</option>
	        <option value="patient">Patient</option>
	        <option value="dentist">Dentist</option>
	        <option value="admin">Administrator</option>
            </select>
        </td>
        <br>
    </tr>    
    <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" class="form-control" userid="username" name="username" value="<?php echo $objUser->username; ?>"></td>
    </tr>   
    <tr>
        <td colspan="2"></td>
        <td><input type="submit" class="btn btn-success" value="Save" name="btnSubmit">
            <a href="adminhome.php?p=userList" class="btn btn-warning">Cancel</a>
        </td>
    </tr>
    </table>
</form>