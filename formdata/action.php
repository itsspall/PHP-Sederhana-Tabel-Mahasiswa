<?php
    if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        if (isset($_POST['jk'])) {
            $jenis_kelamin = $_POST['jk'];
        } else {
            echo "Silakan pilih salah satu opsi.";
        }
        $tgl_lahir = date($_POST['tgl_lahir']);
    }
    


    echo "NIM   :" . $nim;
    echo "<br/>";
    echo "Nama  :" . $nama;
    echo "<br/>";
    echo "Jenis Kelamin   :" . $jenis_kelamin;
    echo "<br/>";
    echo "Tanggal lahir  :" . $tgl_lahir;
?>