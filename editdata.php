<?php
    require 'fungsi.php';

    $id = $_GET["id"];
    $query = "SELECT * FROM mahasiswa WHERE id=$id";

    $mhs = tampildata($query)[0];


    if(isset($_POST["kirim"]))
    {
        
        if(editdata($_POST, $id) > 0)
        {
            echo "<script>
                alert ('Data berhasil diedit!!');
                window.location.href = 'mahasiswa.php';
            </script>";
    
        }

        else
        {
            echo "<script>
                alert ('Data gagal diedit!!');
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
    <title>edit mahasiswa</title>
    <link rel="stylesheet" href="aset/css/style.css">
</head>
<body>
    <h1 align="center">
            Edit data mahasiswa
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
            <input type="text" id="nama" name="nama" require value="<?= $mhs["nama"]?>">
            <br>
        <label for="nim">NIM:</label>
        <br>
        <input type="number" id="nim" name="nim" require value="<?= $mhs["nim"]?>">
        <br>
        <label for=prodi">Prodi:</label>
            <br>
            <input type="text" id="prodi" name="prodi" require value="<?= $mhs["prodi"]?>">
            <br>
        <label for= "email">Email:</label><br>
            <input type="email" id="email" name="email" require value="<?= $mhs["email"]?>">
            <br>
        <label for="nohp">Nomor HP:</label><br>
            <input type="number" id="nohp" name="nohp" require value="<?= $mhs["no_hp"]?>">
            <br>
        <label for="foto">Foto:</label>
            <br>
            <input type="text" id="foto" name="foto" require value="<?= $mhs["foto"]?>">
            <br><br>

        <input type="submit" value="kirim" name="kirim">
    </form>
</body>
</html>