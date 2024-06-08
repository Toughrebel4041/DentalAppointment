<?php
    session_destroy();
    echo '<script>alert("Anda telah berhasil logout");</script>';
    echo '<script>window.location = "index.php";</script>';
?>