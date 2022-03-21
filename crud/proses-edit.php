<?php

include("config.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $jenis = $_POST['jenis'];
    $merk = $_POST['merk'];
    $warna = $_POST['warna'];
    $tipe = $_POST['tipe'];

    $sql = "UPDATE elektronik SET jenis='$jenis', merk='$merk', warna='$warna', tipe='$tipe' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>