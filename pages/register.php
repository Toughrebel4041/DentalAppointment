<?php
require_once('./class/class.User.php');

if(isset($_POST['btnSubmit'])){
    //add username and password with default roles assigned is patient
            $inputeusername=$_POST["username"];
            $objUser = new User();
            $objUser->ValidateUsername($inputeusername);
            if($objUser->hasil){
                echo "<script>alert('Username sudah terdaftar'); </script>";
            } else {
                $objUser->email=$_POST["email"];
                $objUser->username=$_POST["username"];
                $password = $_POST['password'];
                $objUser->password = password_hash($password, PASSWORD_DEFAULT);
                $objUser->name=$_POST["name"];
                $objUser->role='patient';
                $objUser->AddUser();
                if($objUser->hasil){
                    echo "<script> alert('Registrasi berhasil'); </script>";
                    echo '<script> window.location="index.php?p=registerUser"; </script>';
                }
            }
        }
        
?>

<div>
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

        input[type=text], input[type=email],
        input[type=password] {
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

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>

    <center>
        <h1> Sign Up </h1>
    </center>
    <form action="" method="post">
        <div class="container">
            <label>Username : </label>
            <input type="text" placeholder="Enter Username" name="username" required>
            <label>Password : </label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <label>Email : </label>
            <br>
            <input type="email" placeholder="Enter your email" name="email" required>
            <br>
            <label>Name : </label>
            <input type="text" placeholder="Enter Your Name" name="name" required>
            <input type="submit" class="btn btn-primary" value="Register" name="btnSubmit">
            <a href="index.php" class="btn btn-danger">Cancel</a></td>
        </div>
    </form>
</div>