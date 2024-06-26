<?php
include 'class.User.php';
class Patient extends Connection {
    private $user;
    private $patientID= 0;
    private $fname = '';
    private $lname = '';
    private $sex = '';
    private $email = '';
    private $telp = '';
    private $address = '';
    private $dentalRecord ='';
    private $userid = '';

    public $hasil = false;
    public $message ='';

    public function __get($atribute) {
        if(property_exists($this, $atribute)) {
            return $this->$atribute;
        }
    }

    public function __set($atribut, $value){
        if(property_exists($this, $atribut)) {
            $this->$atribut = $value;
        }
    }

    function __construct(){
        parent::__construct();
        $this->user = new User();
    }

    private function isValidUserID($userid) {
        $sql = "SELECT COUNT(*) AS count FROM user WHERE userid='$userid'";
        $result = mysqli_query($this->connection, $sql);
        $data = mysqli_fetch_assoc($result);
        return $data['count'] >= 0;
    }

    public function AddPatient() {
        if (!$this->isValidUserID($this->userid)) {
            $this->message = 'Invalid userid. User ID does not exist in user table.';
            return;
        }

        $sql = "INSERT INTO patient (fname, lname, sex, address, email, telp, dentalRecord)
                VALUES ('$this->fname','$this->lname', '$this->sex','$this->address', 
                '$this->email',$this->telp,'$this->dentalRecord')";
        
        $this->hasil = mysqli_query($this->connection, $sql);
        
        if($this->hasil) {
            $this->message = 'Data berhasil ditambahkan!';
        } else {
            $this->message = 'Data gagal ditambahkan! Error: ' . mysqli_error($this->connection);
        }
    }

    public function UpdatePatient(){
        $sql = "UPDATE patient
                SET fname ='$this->fname', 
                    lname = '$this->lname', 
                    sex = '$this->sex', 
                    address = '$this->address',
                    email = '$this->email',
                    telp = '$this->telp'  
                WHERE patientID = '$this->patientID'";

        $this->hasil = mysqli_query($this->connection, $sql);
        if($this->hasil)
            $this->message ='Data berhasil diubah!';
        else
            $this->message ='Data gagal diubah!';
    }

    public function DeletePatient(){
        $sql = "DELETE FROM patient WHERE patientID='$this->patientID'";
        $this->hasil = mysqli_query($this->connection, $sql);
        if($this->hasil)
            $this->message ='Data berhasil dihapus!';
        else
            $this->message ='Data gagal dihapus!';
    }

    public function SelectYourProfile(){
        $sql = "SELECT p.*, u.userid, u.username FROM patient p INNER JOIN user u WHERE p.patientID=u.userid";
        $result = mysqli_query($this->connection, $sql);
        $arrResult = Array();
        $count=0;
        if(mysqli_num_rows($result) < 3){
        
        while ($data = mysqli_fetch_array($result))
        {
        $objPatient = new Patient();
        $objPatient->patientID=$data['patientID'];
        $objPatient->fname=$data['fname'];
        $objPatient->lname=$data['lname'];
        $objPatient->sex=$data['sex'];
        $objPatient->email=$data['email'];
        $objPatient->telp=$data['telp'];
        $objPatient->address=$data['address'];
        $objPatient->user->userid=$data['userid'];
        $objPatient->dentalRecord=$data['dentalRecord'];
        $arrResult[$count] = $objPatient;
        }

        }
        return $arrResult;
    }

    public function SelectAllPatient(){
        $sql = "SELECT * FROM patient";
        $result = mysqli_query($this->connection, $sql);
        $arrResult = Array();
        $count=0;
        if(mysqli_num_rows($result) > 0){
        
        while ($data = mysqli_fetch_array($result))
        {
        $objPatient = new Patient();
        $objPatient->patientID=$data['patientID'];
        $objPatient->fname=$data['fname'];
        $objPatient->lname=$data['lname'];
        $objPatient->sex=$data['sex'];
        $objPatient->email=$data['email'];
        $objPatient->telp=$data['telp'];
        $objPatient->address=$data['address'];
        $objPatient->userid=$data['userid'];
        $objPatient->dentalRecord=$data['dentalRecord'];
        $arrResult[$count] = $objPatient;
        $count++;
        }

        }
        return $arrResult;
    }

    
    public function SelectOnePatientByUserID(){
        $sql = "SELECT * FROM patient WHERE userid='$this->userid'";
        $resultOne = mysqli_query($this->connection, $sql);
        if(mysqli_num_rows($resultOne) == 1){
            $this->hasil = true;
            $data = mysqli_fetch_assoc($resultOne);
            $this->patientID = $data['patientID'];
            $this->fname = $data['fname'];
            $this->lname = $data['lname'];
            $this->sex = $data['sex'];
            $this->email = $data['email'];
            $this->telp = $data['telp'];
            $this->address = $data['address'];
            $this->userid = $data['userid'];
            $this->dentalRecord = $data['dentalRecord'];
        }
    }
    
}
?>