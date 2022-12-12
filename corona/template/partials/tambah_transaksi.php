<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index_admin.php"><img src="../assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.php"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="../assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                  <span>Gold Member</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                       <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index_admin.php">
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
              <span class="menu-title">Tampil Data</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="tampil_siswa.php">Tampil Siswa</a></li>
                <li class="nav-item"> <a class="nav-link" href="tampil_kelas.php">Tampil Kelas</a></li>
                <li class="nav-item"> <a class="nav-link" href="tampil_petugas.php">Tampil Petugas</a></li>
                <li class="nav-item"> <a class="nav-link" href="tampil_spp.php">Tampil SPP</a></li>
              </ul>
            </div>
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
                <li class="nav-item"> <a class="nav-link" href="transaksi_kelas.php">Transaksi Kelas</a></li>
                <li class="nav-item"> <a class="nav-link" href="histori_transaksi.php">Histori Transaksi</a></li>
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
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index_admin.php"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li>
            </ul>
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
                    <img class="img-xs rounded-circle" src="../assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p>
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
            <div class="page-header">
              <h3 class="page-title"> Tambah Transaksi </h3>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                        <form action= "proses_tambah_transaksi.php" method= "POST" class="forms-sample">
                          <div class="form-group">
                            <label>Petugas</label>
                            
                            <select name="id_petugas" class="form-control">
                                <option value="not_option">Pilih Petugas</option>
                                <?php
                                 include "koneksi.php"; 
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
                          <div class="form-group">
                            <label>ID SPP</label>
                            <select name="id_petugas" class="form-control">
                                <option value="not_option">Pilih Petugas</option>
                                <?php
                                 include "koneksi.php"; 
                                $qry_spp=mysqli_query($conn, "SELECT * FROM siswa,spp WHERE id_spp");
                                while($dt_spp=mysqli_fetch_array($qry_spp)){
                                  echo '<option value="'.$dt_spp['id_spp'].'">'.$dt_spp['id_spp']."|" .$dt_spp['nama'].'</option>';
                                }
                                ?>`
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Jumlah Bayar</label>
                            <select class="form-control" name="jumlah_bayar">
                              <option>Pilih Nominal</option>
                              <option value="500000">1|500000</option>
                              <option value="600000">2|600000</option>
                              <option value="700000">3|700000</option>
                              </select>
                          </div>
                          <button type="submit" class="btn btn-primary mr-2">Submit</button>
                          <a href="transaksi_kelas.php" class="btn btn-light">Cancel</button>
                        </form>
                     
    
        <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
         
          <!-- partial -->
       
        <!-- main-panel ends -->
    
      <!-- page-body-wrapper ends -->
    
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>