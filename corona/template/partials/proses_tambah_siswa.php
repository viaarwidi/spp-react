<?php

    if($_POST){
        $nisn=$_POST['nisn'];
        $nis=$_POST['nis'];
        $nama=$_POST['nama'];
        $id_kelas=$_POST['id_kelas'];
        $alamat=$_POST['alamat'];
        $no_telp= $_POST['no_telp'];
        $id_spp=$_POST['id_spp'];
    }
    if(empty($nisn)){
        echo "<script>alert('Nisn siswa tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    }else if(empty($nis)){
        echo "<script>alert('Nis siswa tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    }else if(empty($nama)){
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else if(empty($id_spp)){
        echo "<script>alert('Id SPP tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else if(empty($id_kelas)){
        echo "<script>alert('Id Kelas tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into siswa (nisn,nis, nama, id_kelas, alamat, no_telp, id_spp) value ('".$nisn."','".$nis."','".$nama."','".$id_kelas."','".$alamat."','".$no_telp."','".$id_spp."')") or 
            die(mysqli_error($conn));
            if($insert){
                 echo "<script>alert('Sukses menambahkan siswa');location.href='tampil_siswa.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan siswa');location.href='tambah_siswa.php';</script>";
    }
}

