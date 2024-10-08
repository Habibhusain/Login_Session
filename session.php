<?php
// session_start()



echo '<br>';
//untuk mengubah folder tempat penyimpanan
echo session_save_path('C:/xampp/htdocs/belajar-php/state/session');
// echo session_save_path();

//untuk menambah data ke session
session_start();

$_SESSION['nama']='aidil';
$_SESSION['alamat']='mars';
$_SESSION['umur']=99;

print_r($_SESSION);


session_destroy();