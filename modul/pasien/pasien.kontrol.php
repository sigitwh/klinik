<?php

if (empty($_GET["a"])) { $a = ''; } else { $a = $_GET["a"]; }

if ($a=='')       { require "pasien.view.php"; }
if ($a=='tambah') { require "pasien.input.php"; }
if ($a=='simpan') { require "pasien.simpan.php"; }
if ($a=='edit')   { require "pasien.edit.php"; }
if ($a=='update') { require "pasien.update.php"; }
if ($a=='hapus')  { require "pasien.hapus.php"; }

?>