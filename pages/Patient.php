<?php
class Patient extends Connection {
    private $patientID = '';
    private $fname = '';
    private $lname = '';
    private $sex = '';
    private $email = '';
    private $telp = '';
    private $address = '';
    private $dentalRecord = '';
    private $userid = '';

    public $hasil = false;
    public $message = '';

    public function __get($atribute) {
        if (property_exists($this, $atribute)) {
            return $this->$atribute;
        }
    }

    public function __set($atribut, $value){
        if (property_exists($this, $atribut)) {
            $this->$atribut = $value;
        }
    }

    public function AddPatient() {
        $sql = "INSERT INTO Patient (patientID, fname, lname, sex, address, email, telp, dentalRecord, userid)
                VALUES ('$this->patientID', '$this->fname', '$this->lname', '$this->sex', '$this->address', 
                        '$this->email', '$this->telp', '$this->dentalRecord', '$this->userid')";

        $this->hasil = mysqli_query($this->connection, $sql);
        if ($this->hasil)
            $this->message = 'Data berhasil ditambahkan!';
        else
            $this->message = 'Data gagal ditambahkan!';
    }

    public function UpdatePatient() {
        $sql = "UPDATE Patient
                SET fname = '$this->fname', lname = '$this->lname', sex = '$this->sex', address = '$this->address',
                    email = '$this->email', telp = '$this->telp', dentalRecord = '$this->dentalRecord'
                WHERE patientID = '$this->patientID'";

        $this->hasil = mysqli_query($this->connection, $sql);
        if ($this->hasil)
            $this->message = 'Data berhasil diubah!';
        else
            $this->message = 'Data gagal diubah!';
    }

    public function DeletePatient() {
        $sql = "DELETE FROM Patient WHERE patientID = '$this->patientID'";
        $this->hasil = mysqli_query($this->connection, $sql);
        if ($this->hasil)
            $this->message = 'Data berhasil dihapus!';
        else
            $this->message = 'Data gagal dihapus!';
    }

    public function SelectAllPatient() {
        $sql = "SELECT * FROM Patient";
        $result = mysqli_query($this->connection, $sql);
        $arrResult = Array();
        $cnt=0;

        if (mysqli_num_rows($result) > 0) {
            while ($data = mysqli_fetch_array($result)) {
                $objPatient = new Patient();
                $objPatient->patientID = $data['patientID'];
                $objPatient->fname = $data['fname'];
                $objPatient->lname = $data['lname'];
                $objPatient->sex = $data['sex'];
                $objPatient->address = $data['address'];
                $objPatient->email = $data['email'];
                $objPatient->telp = $data['telp'];
                $objPatient->dentalRecord = $data['dentalRecord'];
                $objPatient->userid = $data['userid'];

                $arrResult[$cnt] = $objPatient;
                $cnt++;
            }
        }
        return $arrResult;
    }

    public function SelectOnePatient() {
        $sql = "SELECT * FROM Patient WHERE userid = '$this->userid'";
        $result = mysqli_query($this->connection, $sql);

        if (mysqli_num_rows($result) == 1) {
            $data = mysqli_fetch_assoc($result);
            $this->patientID = $data['patientID'];
            $this->fname = $data['fname'];
            $this->lname = $data['lname'];
            $this->sex = $data['sex'];
            $this->address = $data['address'];
            $this->email = $data['email'];
            $this->telp = $data['telp'];
            $this->dentalRecord = $data['dentalRecord'];
            $this->userid = $data['userid'];

            $this->hasil = true;
        }
    }
}


?>
