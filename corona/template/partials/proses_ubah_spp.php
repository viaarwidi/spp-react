<?php
error_reporting(0);
    if($_POST){
        $id_spp     =$_POST['id_spp'];
        $tahun      = $_POST['tahun'];
        $nominal     = $_POST['nominal'];
       
        
    if(empty($tahun)){
        echo "<script>alert('Tahun pembayaran tidak boleh kosong');location.href='tampil_spp.php';</script>";
    } elseif(empty($nominal)){
        echo "<script>alert('Nominal pembyaran tidak boleh kosong');location.href='tampil_spp.php';</script>";
    } else {
            include "koneksi.php";
        if(empty($id_spp)){
                $update=mysqli_query($conn,"update spp set tahun='".$tahun."', nominal='".$nominal."' where id_spp = '".$id_spp."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update spp');location.href='tampil_spp.php';</script>";
            } else {
                echo "<script>alert('Gagal update spp');location.href='ubah_spp.php?id_spp=".$id_spp."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update spp set tahun='".$tahun."', nominal='".$nominal."' where id_spp = '".$id_spp."' ") or die(mysqli_error($conn));
                if($update){
                  echo "<script>alert('Sukses update spp');location.href='tampil_spp.php';</script>";
              } else {
                    echo "<script>alert('Gagal update spp');location.href='tampil_spp.php?id_spp=".$id_spp."';</script>";
              }
        }
    }
}
?>