<!DOCTYPE html>
<html>
    <head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title></title>
    </head>
    <body>
        <br><h3 align="center">Tampil Petugas</h3>
        <table class="table table-hover table-striped">
        <thead>
        <tr>
        <th>No</th><th>Id Petugas</th><th>Username</th><th>Password</th>
        <th>Nama Petugas</th><th>level</th>

        </tr>
    </thead>
    <tbody>
<?php
include "koneksi.php";
$qry_petugas=mysqli_query($conn,"select * from petugas");
$no=0;
while($data_petugas=mysqli_fetch_array($qry_petugas)){
    $no++;?>
    <tr>
    <td><?=$no?></td>
    <td><?=$data_petugas['id_petugas']?></td>
    <td><?=$data_petugas['username']?></td>>
    <td><?=$data_petugas['password']?></td>
    <td><?=$data_petugas['nama_petugas']?></td>
    <td><?=$data_petugas['level']?></td>
    <td><a href="ubah_petugas.php?id_petugas=<?=$data_petugas['id_petugas']?>" class="btn btn-success">Ubah</a> 
    <a href="hapus_petugas.php?id_petugas=<?=$data_petugas['id_petugas']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
    </tr>
<?php
}
?>
<td><a href="tambah_petugas.php" class="btn btn-success">Tambah Petugas'</a></td>
<?php
?>  
    </tbody>
</table>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</body>w
</html>