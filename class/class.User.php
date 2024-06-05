<?php
class User extends Connection{
    private $userid = 0;
    private $email = '';
    private $username = '';
    private $password = '';
    private $name = '';
    private $role = '';
    private $pat = '';

    private $hasil = false;
    private $message = '';

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
    public function AddUser(){
        $sql = "INSERT INTO user (userid, email, username, password, name, role) VALUES ('$this->userid','$this->email', '$this->username','$this->password', '$this->name', '$this->role')";
        $this->hasil = mysqli_query($this->connection, $sql);
        if($this->hasil)
        $this->message ='Data berhasil ditambahkan!';
        else
        $this->message ='Data gagal ditambahkan!';
    }
    public function ValidateUsername($inputeusername){

        $sql = "SELECT * FROM user
        
        WHERE username = '$inputeusername'";
        
        $result = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows ($result) == 1){
        $this->hasil = true;
        $data = mysqli_fetch_assoc($result);
        $this->userid = $data['userid'];
        $this->username = $data['username'];
        $this->password = $data['password'];
        $this->name=$data['name'];
        $this->email=$data['email'];
        $this->role=$data['role'];
        }
    }
}
?>