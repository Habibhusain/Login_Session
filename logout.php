<?php
session_start();
session_destroy();

echo "<script>alert('dadah')
    window.location='login.php';
    </script>";
    exit();
?>