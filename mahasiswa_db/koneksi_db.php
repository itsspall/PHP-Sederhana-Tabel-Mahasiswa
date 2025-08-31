<?php 
    $address   = "localhost";
    $user       = "root";
    $password      = "";
    $db_name   = "mahasiswa";

    $varkoneksi = mysqli_connect($address, $user, $password, $db_name); 
    
    if($varkoneksi) 
    { 
        echo ""; 
    } 
    else 
    { 
        echo "Koneksi ke database gagal, mohon periksa lagi file koneksi ke database Anda"; 
    } 
?>