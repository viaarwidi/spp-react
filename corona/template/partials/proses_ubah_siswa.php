<?php
// Proses update
include "koneksi.php";
if($_POST){
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['id_kelas'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];


    if(empty($nama)){
        echo "<script>alert('Username tidak boleh kosong');location.href='tampil_siswa.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('Password tidak boleh kosong');location.href='tampil_siswa.php';</script>";
    } elseif(empty($no_telp)){
        echo "<script>alert('Nama siswa tidak boleh kosong');location.href='tampil_siswa.php';</script>";
       
    } else {
            include "koneksi.php";
        if(empty($nisn)){
                $update=mysqli_query($conn,"update siswa set  nama='".$nama."', alamat='".$alamat."',no_telp='".$no_telp."' where nisn = '".$nisn."' ") or die(mysqli_error($conn));            
                if($update){
                echo "<script>alert('Sukses update siswa');location.href='tampil_siswa.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='ubah_siswa.php?id_siswa=".$id_siswa."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update siswa set  nama='".$nama."', alamat='".$alamat."',no_telp='".$no_telp."' where nisn = '".$nisn."' ") or die(mysqli_error($conn));
                if($update){
                echo "<script>alert('Sukses update siswa');location.href='tampil_siswa.php';</script>";
              } else {
                    echo "<script>alert('Gagal update siswa');location.href='ubah_siswa.php?id_siswa=".$id_siswa."';</script>";
              }
        }
    }
}
?>
 