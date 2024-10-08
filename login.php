<?php
session_start();

if(isset ($_SESSION['username'])){
    header('Location: dashboard.php');
}

$username='husain';
$password='123';



if(isset($_POST['username'])&& isset($_POST['password'])){
    $ambil_username = $_POST['username'];
    $ambil_password = $_POST['password'];
    
if($ambil_username == $username && $ambil_password == $password){

    $_SESSION['username'] = $ambil_username;
    echo "<script>alert('selamat anda telah login')
        window.location='dashboard.php';
        </script>";
}
else{
    echo "<script>alert('Paswword Salah !! Login dulu Yuk!! ASYHADU')</script>";
}
}
?>


<html>
    <head>
    <title>Login</title>
    <style>
        body{
            background-color:skyblue;
        }
        

    </style>
    </head>
    <body>
        <h2>Login Dulu Kawan</h2>
        <form method="POST" action="">
           <input type="text" name="username"placeholder="username" ><br>
           <input type="text" name="password"placeholder="password" ><br>
            <input type="submit" value="Login">
        </form>
    </body>
</html>