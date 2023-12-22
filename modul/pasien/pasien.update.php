<?php

$id_pasien = $_GET["id_pasien"];

$nama_pasien    = $_POST["nama_pasien"];
$tgl_lhr_pasien = $_POST["tgl_lhr_pasien"];
$tmp_lhr_pasien = $_POST["tmp_lhr_pasien"];
$jns_kel_pasien = $_POST["jns_kel_pasien"];
$alamat_pasien  = $_POST["alamat_pasien"];
$telp_pasien    = $_POST["telp_pasien"];

$sql = "UPDATE `pasien` 
        SET `nama_pasien`    = '$nama_pasien', 
            `tgl_lhr_pasien` = '$tgl_lhr_pasien',
            `tmp_lhr_pasien` = '$tmp_lhr_pasien',
            `jns_kel_pasien` = '$jns_kel_pasien',
            `alamat_pasien`  = '$alamat_pasien',
            `telp_pasien`    = '$telp_pasien' 
        WHERE 
            `id_pasien` = '$id_pasien'";

$hasil = mysqli_query($koneksi, $sql);

header('location: ?m=pasien');

?>