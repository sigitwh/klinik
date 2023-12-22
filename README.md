Struktur File

<pre>
klinik/
├── modul/
│   ├── /dokter
│   ├── /obat
│   └── /pasien
│        ├── pasien.edit.php
│        ├── pasien.hapus.php
│        ├── pasien.input.php
│        ├── pasien.kontrol.php
│        ├── pasien.simpan.php
│        ├── pasien.update.php
│        ├── pasien.cetak.php
│        └── pasien.view.php
├── config.php
├── footer.php
├── header.php
├── index.php
├── kontrol.php
└── menu.php
</pre>

Tabel pasien
<pre>
CREATE TABLE `pasien` (
  `id_pasien` bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nama_pasien` varchar(100) NOT NULL,
  `tmp_lhr_pasien` varchar(100) NOT NULL,
  `tgl_lhr_pasien` date NOT NULL,
  `jns_kel_pasien` varchar(1) NOT NULL,
  `alamat_pasien` varchar(100) NOT NULL,
  `telp_pasien` varchar(20) NOT NULL
)
</pre>
