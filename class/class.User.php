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
    public function ValidateEmail($inputemail){

        $sql = "SELECT * FROM user
        
        WHERE email = '$inputemail'";
        
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

    public function SelectAllUser(){
        $sql = "SELECT * FROM user";
        $result = mysqli_query($this->connection, $sql);
        $arrResult = Array();
        $count=0;
        if(mysqli_num_rows($result) > 0){
        
        while ($data = mysqli_fetch_array($result))
        {
        $objUser = new User();
        $objUser->userid=$data['userid'];
        $objUser->email=$data['email'];
        $objUser->password=$data['password'];
        $objUser->name=$data['name'];
        $objUser->role=$data['role'];
        $objUser->username=$data['username'];
        $arrResult[$count] = $objUser;
        $count++;
        }

        }
        return $arrResult;
    }

    public function UpdateUser(){
        $sql = "UPDATE user
                SET email ='$this->email',
                    name = '$this->name',
                    role = '$this->role',
                    username = '$this->username'
                WHERE userid = '$this->userid'";

        $this->hasil = mysqli_query($this->connection, $sql);
        if($this->hasil)
            $this->message ='Data berhasil diubah!';
        else
            $this->message ='Data gagal diubah!';
    }

    public function SelectOneUser(){
        $sql = "SELECT * FROM user WHERE userid='$this->userid'";
        $resultOne = mysqli_query($this->connection, $sql);
        if(mysqli_num_rows($resultOne) == 1){
            $this->hasil = true;
            $data = mysqli_fetch_assoc($resultOne);
            $this->email = $data['email'];
            $this->userid = $data['userid'];
            $this->name = $data['name'];
            $this->role = $data['role'];
            $this->username=$data['username'];
        }
    }
}
?>