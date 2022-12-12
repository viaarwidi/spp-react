<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tampi Siswa</h4>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <table class="table table-hover table-striped"></table>
                      <table>
<body>
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
                    </div>
                  </div>
                </div>
              </div>


              
              <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Transaksi</h4>
                  <form action="proses_tambah_transaksi.php" method="POST">
                  <p class="card-description">
                    Masukkan Data Transaksi di sini.
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label>Petugas</label>
                      <select name="id_petugas" class="form-control">
                          <option value="not_option">Pilih Petugas</option>
                          <?php include "koneksi.php"; 
                          $qry_petugas=mysqli_query($conn, "SELECT * FROM petugas ORDER BY id_petugas");
                          while($dt_petugas=mysqli_fetch_array($qry_petugas)){
                            echo '<option value="'.$dt_petugas['id_petugas'].'">'.$dt_petugas['nama_petugas'].'</option>';
                          }
                          ?>`
                      </select>
                    </div>
                    <div class="form-group">
                      <label>NISN</label>
                      <input type="text" name="nisn" class="form-control" placeholder="NISN">
                    </div>
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" name="nama" class="form-control" placeholder="Nama Siswa">
                    </div>
                    <div class="form-group">
                      <label>Tanggal Bayar</label>
                      <input type="date" name="tgl_bayar" class="form-control" placeholder="Tanggal Bayar">
                    </div>
                    <div class="form-group">
                      <label>Bulan</label>
                      <select class="form-control" name="bulan_dibayar">
                        <option>Pilih Bulan</option>
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Agustus</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="November">November</option>
                        <option value="Desember">Desember</option>
                  </select>
                    </div>
                    <div class="form-group">
                      <label>Tahun Bayar</label>
                      <input type="number" name="tahun_dibayar" class="form-control" placeholder="Tahun Bayar">
                    </div>
                    <div class="form-group">
                      <label>SPP</label>
                      <select name="id_spp" class="form-control">
                          <option value="not_option">Pilih Angkatan</option>
                          <?php include "koneksi.php"; 
                          $qry_spp=mysqli_query($conn, "SELECT * FROM spp ORDER BY id_spp");
                          while($dt_spp=mysqli_fetch_array($qry_spp)){
                            echo '<option value="'.$dt_spp['id_spp'].'">'.$dt_spp['angkatan']. " | " .$dt_spp['nominal'].'</option>'; 
                          }
                          ?>`
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Jumlah Bayar</label>
                      <input type="number" name="jumlah_bayar" class="form-control" placeholder="Jumlah Bayar">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="tampil_siswa.php" class="btn btn-light">Cancel</button>
                  </form>
                </form>
                </div>
              </div>
            </div>
          </div>


          <!DOCTYPE html>
    <html>
        <head>
            <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
            <title></title>
        </head>
    <body>
        <h3>Tambah SPP</h3>
        <form action="proses_tambah_spp.php" method="post">

            id_spp :
            <input type="number" name="id_spp" value="" class="form-control">

            Tahun :
            <input type="number" name="tahun" value="" class="form-control">

           Nominal :
           <input type="number" name="nominal" value="" class="form-control">
            
            <input type="submit" name="submit" value="Tambah SPP" class="btn btn-primary">
        </form>
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
    </html>


          
