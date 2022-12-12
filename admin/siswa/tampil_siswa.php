<!DOCTYPE html>
<html>
    <head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title></title>
    </head>
    <body>
        <br><h3 align="center">Tampil Siswa</h3>
        <table class="table table-hover table-striped">
        <thead>
        <tr>
        <th>NO</th><th>NISN</th><th>NIS</th>
        <th>NAMA SISWA</th><th>ID KELAS</th>
        <th>ALAMAT</th><th>NO_TELP</th><th>ID SPP</th><th>AKSI</th>
        </tr>
    </thead>
    <tbody>
<?php
include "koneksi.php";

$qry_siswa=mysqli_query($conn,"select * from siswa join kelas on kelas.id_kelas=siswa.id_kelas");
 
$no=0;
while($data_siswa=mysqli_fetch_array($qry_siswa)){
    $no++;?>
    <tr>
    <td><?=$no?></td>
    <td><?=$data_siswa['nisn']?></td>
    <td><?=$data_siswa['nis']?></td>
    <td><?=$data_siswa['nama']?></td>
    <td><?=$data_siswa['id_kelas']?></td> 
    <td><?=$data_siswa['alamat']?></td>
    <td><?=$data_siswa['no_telp']?></td> 
    <td><?=$data_siswa['id_spp']?></td> 
    <td><a href="ubah_siswa.php?nisn=<?=$data_siswa['nisn']?>" class="btn btn-success">Ubah</a> 
    <a href="hapus_siswa.php?nisn=<?=$data_siswa['nisn']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
    </tr>
<?php
}
?>
<td><a href="tambah_siswa.php" class="btn btn-success">Tambah Siswa</a></td>
<?php
?>  
    </tbody>
</table>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</body>
</html>