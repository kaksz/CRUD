<?php

include("config.php");

if(isset($_POST['daftar'])){

    $jenis = $_POST['jenis'];
    $merk = $_POST['merk'];
    $warna = $_POST['warna'];
    $tipe = $_POST['tipe'];

    $sql = "INSERT INTO elektronik (jenis, merk, warna, tipe) VALUE ('$jenis', '$merk', '$warna', '$tipe' )";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list.php?status=sukses');
    } else {
        header('Location: list.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>