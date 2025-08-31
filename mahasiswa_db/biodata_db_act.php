<?php
    session_start();

    include 'koneksi_db.php';

    if(isset($_POST['Submit'])) 
    {
        $nim=$_POST['nim'];
        $nama=$_POST['nama'];
        if (isset($_POST['jk'])) {
            $jenis_kelamin = $_POST['jk'];
        } else {
            echo "Silakan pilih salah satu opsi.";
        }
        $tanggal_lahir = date($_POST['tanggal_lahir']);

        $insertdata=mysqli_query($varkoneksi,"insert into biodata (nim,nama,jk,tanggal_lahir) VALUES('$nim','$nama','$jenis_kelamin','$tanggal_lahir')");

        echo "User berhasil ditambah. <a href='list_biodata.php'>Data User</a>";
    }
?>