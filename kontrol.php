<?php

if (empty($_GET["m"])) { $m = ""; } else { $m = $_GET["m"]; }

if ($m=='pasien') { require "modul/pasien/pasien.kontrol.php"; }
if ($m=='obat')   { require "modul/obat/obat.kontrol.php"; }
if ($m=='dokter') { require "modul/dokter/dokter.kontrol.php"; }

?>