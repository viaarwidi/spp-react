<?php

    if($_POST){
        $id_kelas =$_POST['id_kelas'];
        $nama_kelas= $_POST['nama_kelas'];
        $kompetensi_keahlian= $_POST['kompetensi_keahlian'];
       
        
    if(empty($nama_kelas)){
        echo "<script>alert('Nama Kelas tidak boleh kosong');location.href='tampil_kelas.php';</script>";
    } elseif(empty($kompetensi_keahlian)){
        echo "<script>alert('Kompetensi Keahlian tidak boleh kosong');location.href='tampil_kelas.php';</script>";
    } else {
            include "koneksi.php";
        if(empty($id_kelas)){
                $update=mysqli_query($conn,"update kelas set nama_kelas='".$nama_kelas."', kompetensi_keahlian='".$kompetensi_keahlian."' where id_kelas = '".$id_kelas."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update kelas');location.href='tampil_kelas.php';</script>";
            } else {
                echo "<script>alert('Gagal update kelas');location.href='ubah_kelas.php?id_kelas=".$id_kelas."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update kelas set nama_kelas='".$nama_kelas."', kompetensi_keahlian='".$kompetensi_keahlian."' where id_kelas = '".$id_kelas."'") or die(mysqli_error($conn));
                if($update){
                  echo "<script>alert('Sukses update kelas');location.href='tampil_kelas.php';</script>";
              } else {
                    echo "<script>alert('Gagal update kelas');location.href='ubah_kelas.php?id_kelas=".$id_kelas."';</script>";
              }
        }
    }
}
?>