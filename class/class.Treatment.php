<?php
include 'class.treatment.php';

class Treatment extends Connection
{
    private $namaTreatment = "";
    private $deskripsi = "";
    private $hargaTreatment = "";
    private $idTreatment = "";

    public $hasil = false;
    public $message = "";

    public function __get($atribute)
    {
        if (property_exists($this, $atribute)) {
            return $this->$atribute;
        }
    }

    public function __set($atribute, $value)
    {
        if (property_exists($this, $atribute)) {
            $this->$atribute = $value;
        }
    }

    function __construct()
    {
        parent::__construct();
        $this->dept = new Treatment();
    }

    public function SelectAllTreatment()
    {

        $sql = "SELECT p.*, d.dname
                    FROM project p INNER JOIN department d
                    ON p.dnum = d.dnumber
                    ORDER BY p.pnumber";
        $result = mysqli_query($this->connection, $sql);

        $arrResult = array();
        $count = 0;
        if (mysqli_num_rows($result) > 0) {

            while ($data = mysqli_fetch_array($result)) {
                $objProject = new Treatment();
                $objProject->pnumber = $data['pnumber'];
                $objProject->pname = $data['pname'];
                $objProject->plocation = $data['plocation'];
                $objProject->dept->dnumber = $data['dnum'];
                $objProject->dept->dname = $data['dname'];
                $arrResult[$count] = $objProject;
                $count++;
            }
        }
        return $arrResult;
    }

    public function AddProject()
    {
        $sql = "INSERT INTO project (pnumber, pname, plocation, dnum)
        VALUES ($this->pnumber, '$this->pname', '$this->plocation', " . $this->dept->dnumber . ")";

        $this->hasil = mysqli_query($this->connection, $sql);

        if ($this->hasil)
            $this->message = 'Data berhasil ditambahkan!';
        else
            $this->message = 'Data gagal ditambahkan!';
    }

    public function UpdateProject()
    {

        $sql = "UPDATE project
            SET pname = '$this->pname',
                plocation = '$this->plocation',
                dnum= " . $this->dept->dnumber . "
            WHERE pnumber = $this->pnumber";

        $this->hasil = mysqli_query($this->connection, $sql);

        if ($this->hasil)
            $this->message = 'Data berhasil diubah!';
        else
            $this->message = 'Data gagal diubah!';
    }

    public function DeleteProject()
    {
        $sql = "DELETE FROM project
        WHERE pnumber = '$this->pnumber'";
        $this->hasil = mysqli_query($this->connection, $sql);

        if ($this->hasil)
            $this->message = 'Data berhasil dihapus!';
        else
            $this->message = 'Data gagal dihapus!';
    }


    public function SelectOneProject()
    {
        $sql = "SELECT * FROM project WHERE pnumber='$this->pnumber'";
        $resultOne = mysqli_query($this->connection, $sql) or die(mysqli_error($this->connection));

        if (mysqli_num_rows($resultOne) == 1) {
            $this->hasil = true;
            $data = mysqli_fetch_assoc($resultOne);
            $this->pnumber = $data['pnumber'];
            $this->pname = $data['pname'];
            $this->plocation = $data['plocation'];
            $this->dept->dnumber = $data['dnum'];
        }
    }
}
