<?php
class Dentist extends Connection {
    private $dentistID='';
    private $fname = '';
    private $address = '';

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

    public function AddDentist(){
        $sql = "INSERT INTO Dentist (dentistID, fname, address)
                VALUES ('$this->dentistID', '$this->fname', '$this->address')";

        $this->hasil = mysqli_query($this->connection, $sql);
        if($this->hasil)
            $this->message ='Data berhasil ditambahkan!';
        else
            $this->message ='Data gagal ditambahkan!';
    }

    public function UpdateDentist(){
        $sql = "UPDATE Dentist
                SET fname ='$this->fname',
                    address = '$this->address'
                WHERE dentistID = '$this->dentistID'";

        $this->hasil = mysqli_query($this->connection, $sql);
        if($this->hasil)
            $this->message ='Data berhasil diubah!';
        else
            $this->message ='Data gagal diubah!';
    }

    public function DeleteDentist(){
        $sql = "DELETE FROM Dentist WHERE dentistID='$this->dentistID'";
        $this->hasil = mysqli_query($this->connection, $sql);
        if($this->hasil)
            $this->message ='Data berhasil dihapus!';
        else
            $this->message ='Data gagal dihapus!';
    }

    public function SelectAllDentist(){
        $sql = "SELECT * FROM Dentist";
        $result = mysqli_query($this->connection, $sql);
        $arrResult = Array();
        $count=0;
        if(mysqli_num_rows($result) > 0){
        
        while ($data = mysqli_fetch_array($result))
        {
        $objDentist = new Dentist();
        $objDentist->dentistID=$data['dentistID'];
        $objDentist->fname=$data['fname'];
        $objDentist->address=$data['address'];
        $arrResult[$count] = $objDentist;
        $count++;
        }

        }
        return $arrResult;
    }

    public function SelectOneDentist(){
        $sql = "SELECT * FROM Dentist WHERE dentistID='$this->dentistID'";
        $resultOne = mysqli_query($this->connection, $sql);
        if(mysqli_num_rows($resultOne) == 1){
            $this->hasil = true;
            $data = mysqli_fetch_assoc($resultOne);
            $this->fname = $data['fname'];
            $this->address=$data['address'];
        }
    }
}
?>