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

    public function UpdateUsername(){
        $sql = "UPDATE login
                SET username ='$this->username'
                WHERE password = '$this->password'";

        $this->hasil = mysqli_query($this->connection, $sql);
        if($this->hasil)
            $this->message ='Username berhasil diubah!';
        else
            $this->message ='Username gagal diubah!';
    }

    public function DeleteEmployee(){
        $sql = "DELETE FROM employee WHERE ssn='$this->ssn'";
        $this->hasil = mysqli_query($this->connection, $sql);
        if($this->hasil)
            $this->message ='Data berhasil dihapus!';
        else
            $this->message ='Data gagal dihapus!';
    }

 
}
?>