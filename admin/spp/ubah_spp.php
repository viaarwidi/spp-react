<!DOCTYPE html>
<html>
    <head>
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
        crossorigin="anonymous">
        <title></title>
</head>
<body>
<?php
    include "koneksi.php";
    $qry_get_spp= mysqli_query($conn, "SELECT * FROM spp WHERE id_spp= '".$_GET['id_spp']."'");
    $dt_spp =mysqli_fetch_array($qry_get_spp);
    ?>
    <h3>Ubah Spp</h3>
    <form action="proses_ubah_spp.php" method="POST">
    <table cellpadding="5">
    <input type="hidden" name="id_spp" value="<?= $dt_spp['id_spp']; ?>">
        <tr>
            <td>Id SPP :</td>
            <td><input type="text" name="id spp" value="<?= $dt_spp['id_spp']; ?>"disabled></td>
        </tr>
        <tr>
            <td>Tahun :</td>
            <td><input type="text" name="tahun" value="<?= $dt_spp['tahun']; ?>"></td>
        </tr>
        <tr>
            <td>Nominal :</td>
            <td><input type="text" name="nominal" value="<?= $dt_spp['nominal']; ?>"></td>
</tr>
        <tr>
            <td colspan="2"><button type="submit" name="simpan">Simpan</button></td>
            <td colspan="2"><a href="tampil_spp.php" class="btn btn-outline-danger">Kembali</a></td>
        </tr>
    </table>
</from>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
crossorigin="anonymous"></script>
</body>
</html>