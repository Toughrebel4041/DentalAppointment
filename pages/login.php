<?php

require_once('./class/class.User.php');
    if(isset($_POST['btnLogin'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $objUser = new User();
        $objUser->hasil = true;
        $objUser->ValidateUsername($username);
    if($objUser->hasil){
        $ismatch = password_verify($password, $objUser->password);
    if($ismatch){
    if (!isset($_SESSION)) {
        session_start();
    }
    $_SESSION["userid"]= $objUser->userid;
    $_SESSION["role"]= $objUser->role;
    $_SESSION["name"]= $objUser->name;
    $_SESSION["email"]= $objUser->email;
    echo "<script>alert('Login sukses');</script>";
    if($objUser->role == 'patient')
        echo '<script>window.location = "userhome.php";</script>';
    else if($objUser->role == 'dentist')
        echo '<script>window.location = "dentisthome.php";</script>';
    else if($objUser->role == 'admin')
        echo '<script>window.location = "adminhome.php";</script>';

    }
        else{
            echo "<script>alert('Password tidak match');</script>";
        }
    }
    else{
        echo "<script>alert('Email tidak terdaftar');</script>";
    }
    }
    ?>
<style>
button {   
       width: 100%;  
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;  
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
 .container {   
        padding: 25px;   
        background-color: lightgrey;  
    }  
footer{
    position: fixed;
    bottom: 0;
    width: 100%;
}


input[name="submit"]{width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;
        background-color: green;  }
</style>   

<center> <h1> Login </h1> </center>   
    <form action="" method="post">  
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <input type="submit" class="btn btn-success" value="Login" name="btnLogin">
            <a href="index.php" class="btn btn-danger">Cancel</a></td>
            <a class="nav-link active" aria-current="page" href="index.php?p=register">Don't have an account yet?</a>
        </div>   
    </form>
</div>