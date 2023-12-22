<?php

$id_pasien = $_GET["id_pasien"];

$sql   = "SELECT * FROM `pasien` WHERE `id_pasien` = '$id_pasien'";
$hasil = mysqli_query($koneksi, $sql);
$data  = mysqli_fetch_array($hasil);

$nama_pasien    = $data["nama_pasien"];
$tgl_lhr_pasien = $data["tgl_lhr_pasien"];
$tmp_lhr_pasien = $data["tmp_lhr_pasien"];
$jns_kel_pasien = $data["jns_kel_pasien"];
$alamat_pasien  = $data["alamat_pasien"];
$telp_pasien    = $data["telp_pasien"];


?><div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h5>Tambah Pasien</h5>
        </div>
    <form action="?m=pasien&a=update&id_pasien=<?php echo $id_pasien; ?>" method="post">
            <div class="card-body">
                <div class="row">
                    <label class="col-sm-2">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_pasien" value="<?=$nama_pasien?>" required>
                    </div>
                </div>
                <div class="row mt-1">
                    <label class="col-sm-2">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="tmp_lhr_pasien" value="<?=$tmp_lhr_pasien;?>" required>
                    </div>
                </div>
                <div class="row mt-1">
                    <label class="col-sm-2">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tgl_lhr_pasien" value="<?=$tgl_lhr_pasien;?>"  required>
                    </div>
                </div>
                <div class="row mt-1">
                    <label class="col-sm-2">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="jns_kel_pasien">
                            <option <?php if ($jns_kel_pasien=='L') { echo "selected"; } ?>>L</option>
                            <option <?php if ($jns_kel_pasien=='P') { echo "selected"; } ?>>P</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-1">
                    <label class="col-sm-2">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat_pasien" value="<?=$alamat_pasien;?>" required>
                    </div>
                </div>
                <div class="row mt-1">
                    <label class="col-sm-2">Telepon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="telp_pasien" value="<?=$telp_pasien;?>" required>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <input type="submit" name="tombol_simpan" value="SIMPAN" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
