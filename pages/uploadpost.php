<?php
    $tipe_file = $_FILES['fupload']['type'];
    $lokasi_file = $_FILES['fupload']['tmp_name'];
    $nama_file = $_FILES['fupload']['name'];
    $ukuran_file = $_FILES['fupload']['size'];
    $folder = './upload/';
    $ukuran_maks_file = 1000000; // 1 MB
    
    if($tipe_file != "image/gif" AND
        $tipe_file != "image/jpeg" AND
        $tipe_file != "image/png" AND
        $tipe_file != "application/pdf"){
        echo "<script>alert('Hanya boleh meng-upload gambar. Pilih file yang lain!');</script>";
        echo "<script>window.location = 'index.php?p=upload';</script>"; // Confirm the file type

    } else if ($ukuran_file > $ukuran_maks_file){
        echo "<script>alert('Ukuran file terlalu besar. Pilih file yang lain');</script>";
        echo "<script>window.location = 'index.php?p=upload';</script>"; // Confirm the file size
    
    } else {
        $isSuccessUpload = move_uploaded_file($lokasi_file, $folder.$nama_file);
        if($isSuccessUpload){
            if($tipe_file == 'image/jpeg' OR $tipe_file == 'image/gif' OR $tipe_file == 'image/png')
                echo '<img src="'.$folder. $nama_file . '">';
                //echo "Nama file : $nama_file sukses diupload<br>"; //memunculkan nama file dan status
                else
                echo '<a href="'.$folder. $nama_file .'"> Lihat File </a>'; 
                //echo "Ukuran file : $ukuran_file bytes<br>";
            }
        }
?>