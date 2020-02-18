<?php
    include "Untitled-1.php"; 
    $username = $_POST['Username'];
    $pass = $_POST['Password'];
    $sql = mysqli_connect($hostname, $username, $password, $dbname);
    $query = "SELECT * FROM restoran VALUES('$username','','$pass')";
    if($query->num_rows != 0) {
        echo "<div align='center'>Username Sudah Terdaftar! <a href='makanan2.php'>Back</a></div>";
   }    else {
        if(!$username || !$pass) {
        echo "<div align='center'>Masih ada data yang kosong! <a href='makanan2.php'>Back</a>";
     }  else {
        $simpan = "INSERT INTO restoran VALUES('$username','E-mail','$pass')");
        if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='makanan1.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>