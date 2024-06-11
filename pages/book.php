<?php
require_once('./class/class.Appointment.php');
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
                    echo '<script> window.location="userhome.php?p=login"; </script>';
                }
            }
        }
?>
<br>
<br>
<h4 class="title"><span class="text"><strong>Form Booking Appointment</strong></span></h4>
<form action="" method="post">
<table class="table" border="0">
<tr>
<td>Name</td>
<td>:</td>
<td>
<input type="text" name="name" id="name" class="form-control" maxlength="20" required>
</tr>
<tr>
        <td>Dentist</td>
        <td>:</td>
        <td>
            <select name="dentist" id="dentist">
	        <option value="">--- Pilih Dentist ---</option>
	        <option value="patient">drg. ###</option>
	        <option value="dentist">drg. ###</option>
	        <option value="admin">drg. ###</option>
            </select>
        </td>
        <br>
</tr>   
<tr>
        <td>Treatment</td>
        <td>:</td>
        <td>
            <select name="role" id="role">
	        <option value="">--- Choose a Role ---</option>
	        <option value="#">Treatment 1</option>
	        <option value="#">Treatment 2</option>
	        <option value="#">Treatment 3</option>
	        <option value="#">Treatment 4</option>
	        <option value="#">Treatment 5</option>
	        <option value="#">Treatment 6</option>
	        <option value="#">Treatment 7</option>
	        <option value="#">Treatment 8</option>
	        <option value="#">Treatment 9</option>
	        <option value="#">Treatment 10</option>
	        <option value="#">Treatment 11</option>
	        <option value="#">Treatment 12</option>
	        <option value="#">Treatment 13</option>
            </select>
        </td>
        <br>
    </tr>   
<tr>
<td>Date</td>
<td>:</td>
<td>
<form name="Filter" method="POST">
    <input type="date" name="dateFrom" value="<?php echo date('Y-m-d'); ?>" />
</form>
</tr>
<tr>
<td>Time</td>
<td>:</td>
<td>
<input type="time" class="form-control" value="<?php $date = date("H:i", strtotime($row['time_d'])); echo "$date"; ?>" id="until_t" name="until_t" />

</tr>
<tr>
<td>Keluhan</td>
<td>:</td>
<td>
<input type="text" name="keluhan" id="keluhan" class="form-control" maxlength=1000 required>
</tr>
<tr>
<td>Dental Record</td>
<td>:</td>
<td>
<form method="post" action="index.php?p=uploadpost" enctype="multipart/form-data">
            <input type="file" name="fupload"> <br> <br>
            <input type="submit" type="submit" value="Upload">
        </form>
</tr>
<tr>
<td></td>
<td></td>
<td><input type="submit" class="btn btn-primary" value="Submit" name="btnSubmit">
<a href="index.php" class="btn btn-danger">Cancel</a></td>
</tr>
</table>
</form>