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

        input[type=text],
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


        input[name="submit"] {
            width: auto;
            padding: 10px 18px;
            margin: 10px 5px;
            background-color: green;
        }
    </style>

    <center>
        <h1> Sign Up </h1>
    </center>
    <form action="transaksi.php" method="post">
        <div class="container">
            <label>Username : </label>
            <input type="text" placeholder="Enter Username" name="username" required>
            <label>Password : </label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <input name="submit" type="submit" value=" Create Account ">
            <button type="button" class="cancelbtn" style="background-color:red;">Cancel</button>
        </div>
    </form>
</div>