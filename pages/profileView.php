<?php
ob_start();
require_once 'inc.koneksi.php';
require_once './class/class.Patient.php';

$patient = new Patient();
$patient->userid = $_SESSION["userid"];
$patient->SelectOnePatient();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['update'])) {
        $patient->fname = $_POST['fname'];
        $patient->lname = $_POST['lname'];
        $patient->sex = $_POST['sex'];
        $patient->address = $_POST['address'];
        $patient->email = $_POST['email'];
        $patient->telp = $_POST['telp'];
        $patient->dentalRecord = $_POST['dentalRecord'];
        $patient->UpdatePatient();
        header("Location:userhome.php?p=profileView");
        exit();
    }
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
            <button type="submit" class="btn btn-primary" name="update" href = "userhome.php?p=Patient">Update</button>
        </form>
    </div>
</body>

</html>
<?php
ob_end_flush();
?>
