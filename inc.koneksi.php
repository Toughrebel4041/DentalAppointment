<?php
class Connection{
    private $host = "localhost";
    private $struser = "root";
    private $strpassword = "";
    private $strdbname = "dentalappointment";
    public $connection;

    function __construct()
    {
        $conn = mysqli_connect($this->host, $this->struser, $this->strpassword);
        $dbselect = mysqli_select_db($conn, $this->strdbname);
        $this->connection = $conn;
    }
}
?>