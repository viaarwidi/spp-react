<?php

    if($_POST){
         $id_spp=$_POST['id_spp'];
        $tahun=$_POST['tahun'];
        $nominal=$_POST['nominal'];
        
    }
    if(empty($id_spp)){
        echo "<script>alert('Id SPP tidak boleh kosong');location.href='tambah_spp.php';</script>";
    }else if(empty($tahun)){
        echo "<script>alert('Tahun pembayaran SPP tidak boleh kosong');location.href='tambah_spp.php';</script>";
    }else if(empty($nominal)){
        echo "<script>alert('Nominal pembayaran tidak boleh kosong');location.href='tambah_spp.php';</script>";
     } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into spp ( id_spp, tahun, nominal) value ('".$id_spp."','".$tahun."','".$nominal."')") or 
            die(mysqli_error($conn));
            if($insert){
                 echo "<script>alert('Sukses menambahkan data Pembayaran SPP');location.href='tampil_spp.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan data Pembayaran SPP');location.href='tambah_spp.php';</script>";
    }
}

