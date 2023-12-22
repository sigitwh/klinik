<html>
  <head>
    <title>A4 Page Using CSS</title>
    <style>
     body {
       width: 230mm;
       height: 100%;
       margin: 0 auto;
       padding: 0;
       font-size: 12pt;
       background: rgb(204,204,204); 
     }
     * {
       box-sizing: border-box;
       -moz-box-sizing: border-box;
     }
     .main-page {
       width: 210mm;
       min-height: 297mm;
       margin: 10mm auto;
       background: white;
       box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
     }
     .sub-page {
       padding: 1cm;
       height: 297mm;
     }
     @page {
       size: A4;
       margin: 0;
     }
     @media print {
       html, body {
     	width: 210mm;
     	height: 297mm;        
       }
       .main-page {
     	margin: 0;
     	border: initial;
     	border-radius: initial;
     	width: initial;
     	min-height: initial;
     	box-shadow: initial;
     	background: initial;
     	page-break-after: always;
       }
     }
  </style>
  </head>
  <body>
    <div class="main-page">
      <div class="sub-page">
        <h3 align='center'>DATA PASIEN</h3>
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tgl Lahir</th>
                    <th>Jns Kel</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    
                </tr>
            </thead>
            <tbody>
<?php
    require "../../config.php";
    $sql = "SELECT * FROM `pasien`";
    $hasil = mysqli_query($koneksi, $sql);

    $nomer = 0;
    while ($data=mysqli_fetch_array($hasil)) {
        $nomer = $nomer + 1;
        $id_pasien = $data["id_pasien"];
        $nama_pasien = $data["nama_pasien"];
        $tmp_lhr_pasien = $data["tmp_lhr_pasien"];
        $tgl_lhr_pasien = $data["tgl_lhr_pasien"];
        $jns_kel_pasien = $data["jns_kel_pasien"];
        $alamat_pasien = $data["alamat_pasien"];
        $telp_pasien = $data["telp_pasien"];
        
        echo "<tr>";
        echo "<td>$nomer</td>";
        echo "<td>$id_pasien</td>";
        echo "<td>$nama_pasien</td>";
        echo "<td>$tmp_lhr_pasien</td>";
        echo "<td>$tgl_lhr_pasien</td>";
        echo "<td>$jns_kel_pasien</td>";
        echo "<td>$alamat_pasien</td>";
        echo "<td>$telp_pasien</td>";

        echo "</tr>";
    }
?>            </tbody>
        </table>
      </div>    
    </div>
  </body>
</html>


