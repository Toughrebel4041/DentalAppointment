<?php
class Login extends Connection{
    private $username = '';
    private $password = '';

    public $hasil = false;
    public $message = '';

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

    public function AddLogin(){
        $sql = "INSERT INTO login (username, password)
                VALUES ('$this->username', '$this->password')";

        $this->hasil = mysqli_query($this->connection, $sql);
        if($this->hasil)
            $this->message ='Login Berhasil!';
        else
            $this->message ='Login Gagal!';
    }

    public function UpdateLogin(){
        $sql = "UPDATE login
                SET username ='$this->username'
                WHERE password = '$this->password'";

        $this->hasil = mysqli_query($this->connection, $sql);
        if($this->hasil)
            $this->message ='Username berhasil diubah!';
        else
            $this->message ='Username gagal diubah!';
    }

    public function DeleteUser(){
        $sql = "DELETE FROM user WHERE userid='$this->userid'";
        $this->hasil = mysqli_query($this->connection, $sql);
        if($this->hasil)
            $this->message ='Data berhasil dihapus!';
        else
            $this->message ='Data gagal dihapus!';
    }

    public function SelectAllUser(){
        $sql = "SELECT * FROM employee";
        $result = mysqli_query($this->connection, $sql);
        $arrResult = Array();
        $count=0;
        if(mysqli_num_rows($result) > 0){
        
        while ($data = mysqli_fetch_array($result))
        {
        $objUser = new Login();
        $objUser->ssn=$data['ssn'];
        $objUser->fname=$data['fname'];
        $objUser->address=$data['address'];
        $arrResult[$count] = $objUser;
        $count++;
        }

        }
        return $arrResult;
    }

    
}
?>