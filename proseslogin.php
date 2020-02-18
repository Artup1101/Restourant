<?php
    include "Untitled-1.php"

   $username = $_POST['Username'];
   $pass = $_POST['Password'];   
   $sql = "SELECT * FROM user WHERE Username = '$username'";
   $query = $db->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='makanan1.php'>Back</a></div>";
   } else {
     if($pass <> $hasil['Password']) {
       echo "<div align='center'>Password salah! <a href='makanan1.php'>Back</a></div>";
     } else {
       $_SESSION['Username'] = $hasil['Username'];
       header('location:index.php');
     }
   }
?>