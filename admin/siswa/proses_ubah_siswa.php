<?php
error_reporting(0);
    if($_POST){
        $nisn     =$_POST['nisn'];
        $nis      = $_POST['nis'];
        $nama     = $_POST['nama'];
        $id_kelas = $_POST['id_kelas'];
        $alamat   = $_POST['alamat'];
        $no_telp  = $_POST['no_telp'];
        $id_spp   = $_POST['id_spp'];
       
        
    if(empty($nama)){
        echo "<script>alert('Nama siswa tidak boleh kosong');location.href='tampil_siswa.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('Alamat siswa tidak boleh kosong');location.href='tampil_siswa.php';</script>";
    } else {
            include "koneksi.php";
        if(empty($nisn)){
                $update=mysqli_query($conn,"update siswa set nama='".$nama."', alamat='".$alamat."',no_telp='".$no_telp."' where nisn = '".$nisn."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update siswa');location.href='tampil_siswa.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='ubah_siswa.php?nisn=".$nisn."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update siswa set nama='".$nama."',alamat='".$alamat."',no_telp='".$no_telp."', alamat='".$alamat."' where nisn ='".$nisn."'") or die(mysqli_error($conn));
                if($update){
                  echo "<script>alert('Sukses update siswa');location.href='tampil_siswa.php';</script>";
              } else {
                    echo "<script>alert('Gagal update siswa');location.href='ubah_siswa.php?nisn=".$nisn."';</script>";
              }
        }
    }
}
?>