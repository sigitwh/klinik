<?php

$nama_pasien    = $_POST["nama_pasien"];
$tgl_lhr_pasien = $_POST["tgl_lhr_pasien"];
$tmp_lhr_pasien = $_POST["tmp_lhr_pasien"];
$jns_kel_pasien = $_POST["jns_kel_pasien"];
$alamat_pasien  = $_POST["alamat_pasien"];
$telp_pasien    = $_POST["telp_pasien"];

//require "../config.php";

$sql = "INSERT INTO `pasien` (
            `id_pasien`, 
            `nama_pasien`, 
            `tmp_lhr_pasien`, 
            `tgl_lhr_pasien`, 
            `jns_kel_pasien`, 
            `alamat_pasien`, 
            `telp_pasien`) 
        VALUES (
            NULL, 
            '$nama_pasien', 
            '$tmp_lhr_pasien', 
            '$tgl_lhr_pasien', 
            '$jns_kel_pasien', 
            '$alamat_pasien', 
            '$telp_pasien');";

$hasil = mysqli_query($koneksi, $sql);

header('location: ?m=pasien');

?>