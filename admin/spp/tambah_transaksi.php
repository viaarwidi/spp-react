<!DOCTYPE html>
    <html>
        <head>
            <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
            <title></title>
        </head>
    <body>        
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
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
    </html>