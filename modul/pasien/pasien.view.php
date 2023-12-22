<div class="container">
    <br>
    <b>Data Pasien</b>
    <span class="float-end">
        <a href="?m=pasien&a=tambah" class="btn btn-primary">TAMBAH</a>
        <a href="modul/pasien/pasien.cetak.php" class="btn btn-primary" target="_blank">CETAK</a>
    </span> 
    <br>
    <br>
    <table class="table table-striped table-colored border">
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
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
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
                    echo "<td>
                            <a href='?m=pasien&a=edit&id_pasien=$id_pasien' class='btn btn-primary'>EDIT</a>
                            <a href='?m=pasien&a=hapus&id_pasien=$id_pasien' class='btn btn-danger'>HAPUS</a>
                          </td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>
        
