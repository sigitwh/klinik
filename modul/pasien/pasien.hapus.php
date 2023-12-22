<?php

$id_pasien = $_GET["id_pasien"];

$sql = "DELETE FROM `pasien` 
        WHERE `id_pasien`='$id_pasien'";

$hasil = mysqli_query($koneksi, $sql);

header('location: ?m=pasien');

?>