<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Makanan</title>
    <link rel="stylesheet" type="text/css" href="makanan1.css">
</head>
<body>
    <h1 align ="center">Selamat Datang</h1>
    
    <div class="kotak_masuk">
		<p class="masuk">SILAHKAN MASUK</p>  
    
        <form action="" method="post">
            <label>Username   : </label>
            <input type="text" name="Username" class="masuk" placeholder ="Username"> <br>
            <label>Email   : </label>
            <input type="text" name="E-mail" class="masuk" placeholder ="E-mail"> <br>
            <label>Password   : </label>
            <input type="text" name="Password" class="masuk" placeholder ="Password"><br>
            <button type="submit" class=tombol_masuk>Daftar</button><br><br>
        </form>
        <form action="makanan1.php" method="post">
            <button type="submit" class=tombol_masuk>Login</button>
        </form>    
    </div>

</body>
</html>