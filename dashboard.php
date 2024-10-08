<?php
session_start();

if(!isset($_SESSION['username'])){
    echo "<script>alert('login dulu cuy')
    window.location='login.php';
    </script>";
    }

$data = array();
 $data[]=$_POST['nama'];
 $nama_file='database.txt';
 $akses_file=fopen($nama_file, 'a+');
 $data_serial= serialize($data);

$data_baru = $_POST['nama'];

$akses_file_tambah=fopen($nama_file,'r');
$ambil_data=fgets($akses_file_tambah);
$data_serial_baru=unserialize($ambil_data);

$data_to_array[]= $data_baru;
$data_serial_baru=serialize($data_to_array);
fwrite($akses_file,$data_serial_baru);

print_r($data);

?>

<html>
    <head>
        <title>dashboard</title>
    </head>
    <body>
    <form method="POST" action="">
        <h1>Selamat Datang Wahai <?php echo $_SESSION['username'];?> Sang Pemuda yang Tersesat dalam Kebaikan</h1>
        <br>
       <h1> <a href="logout.php">logout</a></h1>

       <input type="text"placeholder="nama" name="nama"><br>
            <button type="submit" >submit</button>

        </form>

        <table>
            <tr>
                <th>
                </th>
            </tr>
            <tr>
                <td>

                </td>
            </tr>
        </table>
    </body>
</html>

