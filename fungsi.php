<?php
    $koneksi = mysqli_connect("localhost", "root", "","syfweeklyb-ti");

    function tampildata($query)
    {
        global $koneksi;
        $result = mysqli_query($koneksi,$query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result))
        {
            $rows[] = $row;
        }
        return $rows;
    }

    function hapusdata($id)
    {
        global $koneksi;
        $query = "DELETE FROM mahasiswa WHERE id=$id";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

    function tambahdata($data, $files)
    {
        global $koneksi;

        $nama = htmlspecialchars($data ["nama"]);
        $nim = htmlspecialchars($data ['nim']);
        $prodi = htmlspecialchars($data ['prodi']);
        $email = htmlspecialchars($data ['email']);
        $nohp = htmlspecialchars($data ['nohp']);

        $namafoto = $files["name"];
        $newnamafoto = date('dmYhis_').$namafoto;
        $tmpfoto= $files["tmp_name"];

        $path = "aset/image/$newnamafoto";

        if(move_uploaded_file($tmpfoto,$path))
        {
            $query = "INSERT INTO mahasiswa (nama,nim,prodi,email,no_hp,foto)
            VALUES('$nama','$nim','$prodi','$email','$nohp','$newnamafoto')";
            mysqli_query($koneksi,$query);
        }

        return mysqli_affected_rows($koneksi);
    }

    function editdata($data,$files,$id)
    {
        global $koneksi;

        $nama = htmlspecialchars($data ["nama"]);
        $nim = htmlspecialchars($data ['nim']);
        $prodi = htmlspecialchars($data ['prodi']);
        $email = htmlspecialchars($data ['email']);
        $nohp = htmlspecialchars($data ['nohp']);
        $foto = htmlspecialchars($data ['foto']);

        $query = "UPDATE mahasiswa SET 
                    nama='$nama',
                    nim= '$nim',
                    prodi='$prodi',
                    email='$email',
                    no_hp='$nohp',
                    foto='$foto'
                    WHERE = '$id'
        ";
        mysqli_query($koneksi,$query);
        return mysqli_affected_rows($koneksi);
    }
?>