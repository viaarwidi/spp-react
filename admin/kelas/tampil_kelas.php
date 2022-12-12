<!DOCTYPE html>
<html>
    <head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title></title>
    </head>
    <body>
        <br><h3 align="center">Tampil Kelas</h3>
        <table class="table table-hover table-striped">
        <thead>
        <tr>
        <th>NO</th><th>Id Kelas</th><th>Nama Kelas</th><th>Kompetensi Keahlian</th>

        </tr>
    </thead>
    <tbody>
<?php
include "koneksi.php";
$qry_kelas=mysqli_query($conn,"select * from kelas");
$no=0;
while($data_kelas=mysqli_fetch_array($qry_kelas)){
    $no++;?>
    <tr>
    <td><?=$no?></td>
    <td><?=$data_kelas['id_kelas']?></td>
    <td><?=$data_kelas['nama_kelas']?></td>>
    <td><?=$data_kelas['kompetensi_keahlian']?></td>
    <td><a href="ubah_kelas.php?id_kelas=<?=$data_kelas['id_kelas']?>" class="btn btn-success">Ubah</a> 
    <a href="hapus_kelas.php?id_kelas=<?=$data_kelas['id_kelas']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
    </tr>
<?php
}
?>
<td><a href="tambah_kelas.php" class="btn btn-success">Tambah Petugas'</a></td>
<?php
?>  
    </tbody>
</table>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</body>
</html>