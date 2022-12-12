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
        <th>NO</th><th>Id SPP</th><th>Tahun</th>
        <th>Nominal</th>
        </tr>
    </thead>
    
</table>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</body><tbody>
<?php
include "koneksi.php";

$qry_spp=mysqli_query($conn,"select * from spp");
 
$no=0;
while($data_spp=mysqli_fetch_array($qry_spp)){
    $no++;?>
    <tr>
    <td><?=$no?></td>
    <td><?=$data_spp['id_spp']?></td>
    <td><?=$data_spp['tahun']?></td>
    <td><?=$data_spp['nominal']?></td>
    <td><a href="ubah_spp.php?id_spp=<?=$data_spp['id_spp']?>" class="btn btn-success">Ubah</a> 
    <a href="hapus_spp.php?id_spp=<?=$data_spp['id_spp']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
    </tr>
<?php
}
?>
<td><a href="tambah_spp.php" class="btn btn-success">Tambah SPP</a></td>
<?php
?>  
    </tbody>
</html>