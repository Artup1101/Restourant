<?php
session_start();
if(!isset($_SESSION['Username'])) {
   header('location:makanan1.php'); 
} else { 
   $username = $_SESSION['Username']; 
}
?>

<title>Sukses Login</title>
<div align='center'>
   Selamat Datang, <b><?php echo $username;?></b> <a href="logout.php"><b>Logout</b></a>
</div>