<?php
class Appointment extends Connection {
    private $appointmentID='';
    private $name = '';
    private $dentistID = '';
    private $patientID = '';
    private $date = '';
    private $time = '';
    private $keluhan = '';
    private $treatmentID ='';

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

    public function AddAppointment(){
        $sql = "INSERT INTO appointment (name, appointmentID, dentistID, appointmentID, date, time, keluhan, treatmentID)
                VALUES ('$this->appointmentID',  
                '$this->name','$this->dentistID', '$this->appointmentID','$this->date', 
                '$this->time','$this->keluhan','$this->treatmentID')";

        $this->hasil = mysqli_query($this->connection, $sql);
        if($this->hasil)
            $this->message ='Data berhasil ditambahkan!';
        else
            $this->message ='Data gagal ditambahkan!';
    }

    public function UpdateAppointment(){
        $sql = "UPDATE appointment
                SET name ='$this->name',
                    address = '$this->appointmentID', '$this->dentistID', '$this->appointmentID', '$this->date', 'this->time', '$this->keluhan',  'this->treatmentID'
                WHERE appointmentID = '$this->appointmentID'";

        $this->hasil = mysqli_query($this->connection, $sql);
        if($this->hasil)
            $this->message ='Data berhasil diubah!';
        else
            $this->message ='Data gagal diubah!';
    }

    public function DeleteAppointment(){
        $sql = "DELETE FROM appointment WHERE appointmentID='$this->apppointmentID'";
        $this->hasil = mysqli_query($this->connection, $sql);
        if($this->hasil)
            $this->message ='Data berhasil dihapus!';
        else
            $this->message ='Data gagal dihapus!';
    }

    public function SelectAllAppointment(){
        $sql = "SELECT * FROM appointment";
        $result = mysqli_query($this->connection, $sql);
        $arrResult = Array();
        $count=0;
        if(mysqli_num_rows($result) > 0){
        
        while ($data = mysqli_fetch_array($result))
        {
        $objAppointment = new Appointment();
        $objAppointment->appointID=$data['appointmentID'];
        $objAppointment->name=$data['name'];
        $objAppointment->dentistID=$data['dentistID'];
        $objAppointment->paientID=$data['appointmentID'];
        $objAppointment->date=$data['date'];
        $objAppointment->time=$data['time'];
        $objAppointment->keluhan=$data['keluhan'];
        $objAppointment->treatmentID=$data['treatmentID'];
        $arrResult[$count] = $objAppointment;
        $count++;
        }

        }
        return $arrResult;
    }

    public function SelectOneAppointment(){
        $sql = "SELECT * FROM appointment WHERE appointmentID='$this->appointmentID'";
        $resultOne = mysqli_query($this->connection, $sql);
        if(mysqli_num_rows($resultOne) == 1){
            $this->hasil = true;
            $data = mysqli_fetch_assoc($resultOne);
            $this->appointmentID = $data['appointmentID'];
            $this->name = $data['name'];
            $this->dentistID=$data['dentistID'];
            $this->patientID=$data['patientID'];
            $this->date=$data['date'];
            $this->keluhan=$data['keluhan'];
            $this->treatmentID=$data['treatmentID'];
        }
    }
}
?>