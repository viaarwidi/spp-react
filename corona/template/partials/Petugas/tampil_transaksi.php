<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Petugas</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index_admin.php"><img src="../../assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.php"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="../../assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Olivia Amora</h5>
                  <span>Gold Member</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                       <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index_petugas.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li> 
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Transaksi</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="transaksi_kelas.php">Bayar SPP</a></li>
                <li class="nav-item"> <a class="nav-link" href="histori_transaksi.php">HistorinTransaksi</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="logout.php">
              <span class="menu-icon">
                <i class="mdi mdi-logout"></i>
              </span>
              <span class="menu-title">Logout</span>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index_petugas.php"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                    <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="../../assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Pet.Olivia</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-l grid-margin stretch-card">
              <div class="card">
                <div class="card-body text-center">
                  <h4 class="card-tittle">Profil Siswa</h4>
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                  <?php include "../koneksi.php";
                  $qry_siswa=mysqli_query($conn,"SELECT * FROM siswa JOIN kelas ON siswa.id_kelas=kelas.id_kelas WHERE siswa.nisn=".$_GET['nisn']);
                  $dt_siswa= mysqli_fetch_array($qry_siswa);?>
                  <h6 class="my-3"><?=$dt_siswa['nama']?></h6>
                  <p class="text-muted mb-1"><?=$dt_siswa['nama_kelas']?> | <?=$dt_siswa['kompetensi_keahlian']?>
                    <div class="d-flex justify-content-center mb-2"></div>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card mb-4">
                <div class="card-body">
                  <!-- <h4 class="card-tittle">Profile Siswa</h4> -->
                  <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Nama</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"><?=$dt_siswa['nama']?></p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">NIS</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"><?=$dt_siswa['nis']?></p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Kelas</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"><?=$dt_siswa['nama_kelas']?></p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Alamat</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"><?=$dt_siswa['alamat']?></p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">No. Telp</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"><?=$dt_siswa['no_telp']?></p>
                  </div>
                </div>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="table-responsive">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Transaksi</h4>
                  <p class="card-description">
                    Transaksi dan Histori Transaksi
                  </p>
                  <div class="table-bordered">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                            <th>NO</th><th>ID PETUGAS</th><th>NISN</th><th>TGL BAYAR</th><th>SPP</th><th>BULAN</th><th>TAHUN</th><th>JMLH BAYAR</th><th>STATUS</th><th>AKSI</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php include "../koneksi.php";
                        $qry_transaksi=mysqli_query($conn,"SELECT * FROM pembayaran JOIN spp ON spp.id_spp=pembayaran.id_spp  WHERE pembayaran.nisn=".$_GET['nisn']);
                        $no=0;
                        while($dt_transaksi=mysqli_fetch_array($qry_transaksi)){
                            $no++;?>
                            <tr>
                                <td><?=$no?></td>
                                <td><?=$dt_transaksi['id_petugas']?></td>
                                <td><?=$dt_transaksi['nisn']?></td>
                                <td><?=$dt_transaksi['tgl_bayar']?></td>
                                <td><?=$dt_transaksi['nominal']?></td>
                                <td><?=$dt_transaksi['bulan_dibayar']?></td>
                                <td><?=$dt_transaksi['tahun_dibayar']?></td>
                                <td><?=$dt_transaksi['jumlah_bayar']?></td>
                                <td><?php
                                if($dt_transaksi['tgl_bayar']=='0000-00-00'){ 
                                    echo "<a class='btn btn-primary btn-sm' href='proses_transaksi.php?id_pembayaran=$dt_transaksi[id_pembayaran]&nisn=$dt_transaksi[nisn]'>Bayar</a> ";
                                } else {
                                    echo "<span class= 'badge badge-success'>LUNAS</span>";
                                }?>
                                            
                                <td><a href="hapus_transaksi.php?id_pembayaran=<?=$dt_transaksi['id_pembayaran']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger btn-sm">Hapus</a></td>
                            </tr>
                            <?php } ?>
                            <?php
                            ?>
                      </tbody>
                    </table>
                  </div>
                  <br><td><a href="tambah_transaksi.php" class="btn btn-primary">Tambah Transaksi</a>
                   <td><a href="cetak.php" class="btn btn-light">Cetak</a>
                </div>
          </div>
        </div>
      </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../../assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../../assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>