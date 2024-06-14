<?php
require_once('./class/class.Patient.php');
require_once('./class/class.User.php');

if(isset($_POST['btnSubmit'])){
    $inputemail=$_POST["email"];
    $objPatient = new User();
    $objPatient->ValidateEmail($inputemail);
    if($objPatient->hasil){
        echo "<script>alert('Email sudah terdaftar'); </script>";
    } else {
            $objPatient = new Patient();
            // POST data menuju database
                $objPatient->email=$_POST["email"];
                $objPatient->fname=$_POST["fname"];
                $objPatient->lname=$_POST["lname"];
                $objPatient->address=$_POST["address"];
                $objPatient->sex=$_POST["sex"];
                $objPatient->dentalRecord=$_POST["dentalRecord"];
                $objPatient->telp=$_POST["telp"];
                $objPatient->AddPatient();
                if($objPatient->hasil){
                    echo "<script> alert('Biodata berhasil disimpan'); </script>";
                    echo '<script> window.location="index.php?p=login"; </script>';
                }
            }
        }
?>
<h4 class="title"><span class="text"><strong>Biodata</strong></span></h4>
<form action="" method="post">
<table class="table" border="0">
<tr>
<td>First Name</td>
<td>:</td>
<td>
<input type="text" name="fname" id="fname" class="form-control" maxlength="20" required>
</tr>
<tr>
<td>Last Name</td>
<td>:</td>
<td>
<input type="text" name="lname" id="lname" class="form-control" maxlength="20" required>
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
<td>
<input type="text" name="address" id="address" class="form-control" required>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td>
<input type="email" name="email" id="email" class="form-control" required>
</tr>
<tr>
<td>Telephone</td>
<td>:</td>
<td>
<input type="tel" name="telp" id="telp" class="form-control" maxlength=15 required>
</tr>
<tr>
<td>Dental Record</td>
<td>:</td>
<td>
<input type="text" name="dentalRecord" id="dentalRecord" class="form-control" required>
</tr>
<tr>
<td></td>
<td></td>
<td><input type="submit" class="btn btn-primary" value="Submit" name="btnSubmit">
<a href="index.php" class="btn btn-danger">Cancel</a></td>
</tr>
</table>
</form>