<?php

    if($_POST){
        $id_kelas=$_POST['id_kelas'];
        $nama_kelas=$_POST['nama_kelas'];
        $kompetensi_keahlian=$_POST['kompetensi_keahlian'];
        
    }
    if(empty($id_kelas)){
        echo "<script>alert('Id Kelas tidak boleh kosong');location.href='tambah_kelas.php';</script>";
    }else if(empty($nama_kelas)){
        echo "<script>alert('Nama Kelas tidak boleh kosong');location.href='tambah_kelas.php';</script>";
    }else if(empty($kompetensi_keahlian)){
        echo "<script>alert('Kompetensi Keahlian tidak boleh kosong');location.href='tambah_kelas.php';</script>";
     } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into kelas ( id_kelas, nama_kelas, kompetensi_keahlian) value ('".$id_kelas."','".$nama_kelas."','".$kompetensi_keahlian."')") or 
            die(mysqli_error($conn));
            if($insert){
                 echo "<script>alert('Sukses menambahkan kelas');location.href='tampil_kelas.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan kelas');location.href='tampil_kelas.php';</script>";
    }
}

