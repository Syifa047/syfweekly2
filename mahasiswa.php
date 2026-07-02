<?php

    require 'fungsi.php';

    $query = "SELECT * FROM mahasiswa";
    $mahasiswa = tampildata($query);

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
            WEB SYF - 2026
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
    <h2>Data mahasiswa</h2>
    <br>
    <a href="tambahdata.php"><button>Tambah data</button></a>
    <br><br>
    <table border="1" cellpading="5px"> 
    <tr>
            <th> NO</th>
            <th> Nama</th>
            <th> NIM</th>
            <th> Prodi </th>
            <th> Email </th>
            <th> Nomer Whatsapp </th>
            <th> Foto </th>
            <th> Aksi</th>
        </tr>
    <?php
        $no = 1;
        foreach($mahasiswa as $mhs)
        {
    ?>  
    <tr>
            <td><?= $no?></td>
            <td><?php echo $mhs ["nama"]?></td>
            <td><?php echo $mhs["nim"]?></td>
            <td><?php echo $mhs ["prodi"]?></td>
            <td><?php echo $mhs ["email"]?></td>
            <td><?php echo $mhs ["no_hp"]?></td>
            <td><img src="aset/image/hirono5.png" width="50px"/></td>
            <td>
                <a href="editdata.php"><button>Edit</button></a>
                <a href="hapusdata.php?id=<?= $mhs["id"] ?>" onclick="return confirm('yakin??')"><button>Hapus</button></a>
            </td> 
    </tr>
    <?php
        $no++;
        }
    ?>
    </table>
    <br> <br>
    <table border="1" cellpading="5px">
        <tr>
            <td> baris 1,1</td>
            <td> baris 1,2</td>
            <td> baris 1,3</td>
            <td> baris 1,4</td>
        </tr>
        <tr>
            <td>baris 2,1 </td>
            <td rowspan="2" colspan="2" align="center"> ? </td>
            <!-- <td >baris 2,3</td> -->
            <td>baris 2,4</td>
        </tr>
        <tr>
            <td>baris 3,1 </td>
            <td>baris 3,4 </td>
            <!-- <td>baris 3,3</td>
            <td>baris 3,4</td> -->
        </tr>
        <tr>
            <td>baris 4,1 </td>
            <td>baris 4,2 </td>
            <td>baris 4,3</td>
            <td>baris 4,4</td>
        </tr>
    </table>
</body>
</html>