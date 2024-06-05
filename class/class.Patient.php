<?php
class Patient extends Connection {
    private $patientID='';
    private $fname = '';
    private $lname = '';
    private $sex = '';
    private $email = '';
    private $telp = '';
    private $address = '';
    private $dentalRecord ='';

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

    public function AddPatient(){
        $sql = "INSERT INTO Patient (patientID, fname, lname, sex, address, email, telp, dentalRecord, userid)
                VALUES ('$this->patientID',  
                '$this->fname','$this->lname', '$this->sex','$this->address', 
                '$this->email','$this->telp','$this->dentalRecord', '$this->userid')";

        $this->hasil = mysqli_query($this->connection, $sql);
        if($this->hasil)
            $this->message ='Data berhasil ditambahkan!';
        else
            $this->message ='Data gagal ditambahkan!';
    }

    public function UpdatePatient(){
        $sql = "UPDATE Patient
                SET fname ='$this->fname',
                    address = '$this->address', '$this->lname', '$this->sex', '$this->telp'  
                WHERE patientID = '$this->patientID'";

        $this->hasil = mysqli_query($this->connection, $sql);
        if($this->hasil)
            $this->message ='Data berhasil diubah!';
        else
            $this->message ='Data gagal diubah!';
    }

    public function DeletePatient(){
        $sql = "DELETE FROM Patient WHERE patientID='$this->patientID'";
        $this->hasil = mysqli_query($this->connection, $sql);
        if($this->hasil)
            $this->message ='Data berhasil dihapus!';
        else
            $this->message ='Data gagal dihapus!';
    }

    public function SelectAllPatient(){
        $sql = "SELECT * FROM Patient";
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

    public function SelectOnePatient(){
        $sql = "SELECT * FROM Patient WHERE patientID='$this->patientID'";
        $resultOne = mysqli_query($this->connection, $sql);
        if(mysqli_num_rows($resultOne) == 1){
            $this->hasil = true;
            $data = mysqli_fetch_assoc($resultOne);
            $this->patientID = $data['patientID'];
            $this->fname = $data['fname'];
            $this->lname=$data['lname'];
            $this->sex=$data['sex'];
            $this->email=$data['email'];
            $this->telp=$data['telp'];
            $this->address=$data['address'];
            $this->userid=$data['userid'];
            $this->dentalRecord=$data['dentalRecord'];
        }
    }
}
?>