<?php
    require 'fungsi.php';

    if(isset($_POST["submit from"]))
    {
        
        if(tambahdata($_POST) >0)
        {
            echo "<script>
                alert ('Data berhasil ditambhakan hapus!!');
                window.location.href = 'mahasiswa.php';
            </script>";
    
        }

        else
        {
            echo "<script>
                alert ('Data gagal di hapus!!');
                window.location.href = 'mahasiswa.php';
            </script>";
    
        }
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data mahasiswa</title>
    <link rel="stylesheet" href="aset/css/style.css">
</head>
<body>
    <h1 align="center">
            FROM MAHASISWA
    </h1>
    <table border="1" align="center" cellspacing="0" cellpadding="10px">
        <tr>
            <td>
                <a href="index.php" = >Home</a>
            </td>
            <td>
                <a href="profile.php" = >profile</a>
            </td>
            <td> 
                <a href="kontak.php" = >Contact</a>
            </td>
            <td>
                <a href="mahasiswa.php">Data mahasiswa</a>
            </td>
        </tr>
    </table>
 <br><br>
    <form action= "" method="post">
        <label for="nama">Nama:</label>
            <br>
            <input type="text" id="nama" name="nama">
            <br><br>
        <label for="nim">NIM:</label>
        <br>
        <input type="number" id="nim" name="nim">
        <br><br>
        <label for=prodi">Prodi:</label>
            <br>
            <input type="text" id="prodi" name="prodi">
            <br><br>
        <label for= "email">Email:</label><br>
            <input type="email" id="email" name="email">
            <br><br>
        <label for="nohp">Nomor HP:</label><br>
            <input type="number" id="nohp" name="nohp">
            <br><br>
        <label for="foto">Foto:</label>
            <br>
            <input type="text" id="foto" name="foto">
            <br><br>

        <input type="submit" value="submit from" name="submit">
    </form>
</body>
</html>