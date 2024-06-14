<?php
ob_start();
require_once('./class/class.Patient.php');
require_once('./class/class.User.php');

$patient = new Patient();
$objUser = new User();
if (isset($_SESSION['userid'])) {
    $patient->userid = $_SESSION['userid'];
} else {
    echo "<script> alert('User not logged in'); </script>";
    echo '<script> window.location = "login.php";</script>';
    exit();
}

if (isset($_POST['btnSubmit'])) {
    $patient->fname = $_POST['fname'];
    $patient->lname = $_POST['lname'];
    $patient->sex = $_POST['sex'];
    $patient->address = $_POST['address'];
    $patient->email = $_POST['email'];
    $patient->telp = $_POST['telp'];
    $patient->dentalRecord = $_POST['dentalRecord'];
    $patient->userid = $_SESSION['userid'];  // Use the correct user ID from the session

    if (isset($_GET['patientID'])) {
        $patient->patientID = $_GET['patientID'];
        $patient->UpdatePatient();
    } else {
        $patient->AddPatient();
    }
    echo "<script> alert('$patient->message'); </script>";
    if ($patient->hasil) {
        echo '<script> window.location = "userhome.php?p=profileView";</script>';
    }
} else if (isset($_GET['patientID'])) {
    $patient->patientID = $_GET['patientID'];
    $patient->SelectOnePatient();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Profile View</title>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Your Profile</h1>

        <?php
        if (isset($_SESSION['update_success'])) {
            echo '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>';
            unset($_SESSION['update_success']); 
        }
        ?>

        <form method="POST">
            <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" value="<?php echo htmlspecialchars($patient->fname); ?>" required>
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" value="<?php echo htmlspecialchars($patient->lname); ?>" required>
            </div>
            <div class="mb-3">
                <label for="sex" class="form-label">Sex</label>
                <select class="form-control" id="sex" name="sex" required>
                    <option value="Male" <?php if ($patient->sex == 'Male') echo 'selected'; ?>>Male</option>
                    <option value="Female" <?php if ($patient->sex == 'Female') echo 'selected'; ?>>Female</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($patient->email); ?>" required>
            </div>
            <div class="mb-3">
                <label for="telp" class="form-label">Telephone</label>
                <input type="text" class="form-control" id="telp" name="telp" value="<?php echo htmlspecialchars($patient->telp); ?>" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="<?php echo htmlspecialchars($patient->address); ?>" required>
            </div>
            <div class="mb-3">
                <label for="dentalRecord" class="form-label">Dental Record</label>
                <textarea class="form-control" id="dentalRecord" name="dentalRecord" rows="3" required><?php echo htmlspecialchars($patient->dentalRecord); ?></textarea>
            </div>
            <td><input type="submit" class="btn btn-success" value="Save" name="btnSubmit">
        </form>
    </div>
</body>

</html>
<?php
ob_end_flush();
?>