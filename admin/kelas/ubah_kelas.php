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
    $qry_get_kelas= mysqli_query($conn, "SELECT * FROM kelas WHERE id_kelas= '".$_GET['id_kelas']."'");
    $dt_kelas =mysqli_fetch_array($qry_get_kelas);
    ?>
    <h3>Ubah Kelas</h3>
    <form action="proses_ubah_kelas.php" method="POST">
    <table cellpadding="5">
    <input type="hidden" name="id_kelas" value="<?= $dt_kelas['id_kelas']; ?>">
        <tr>
            <td>Id Kelas :</td>
            <td><input type="text" name="id_kelas" value="<?= $dt_kelas['id_kelas']; ?>"disabled></td>
        </tr>
        <tr>
            <td>Nama Kelas :</td>
            <td><input type="text" name="nama_kelas" value="<?= $dt_kelas['nama_kelas']; ?>"></td>
        </tr>
        <tr>
            <td>Kompetensi Keahlian :</td>
            <td><input type="text" name="kompetensi_keahlian" value="<?= $dt_kelas['kompetensi_keahlian']; ?>"></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit" name="simpan">Simpan</button></td>
            <td colspan="2"><a href="tampil_kelas.php" class="btn btn-outline-danger">Kembali</a></td>
        </tr>
    </table>
</from>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
crossorigin="anonymous"></script>
</body>
</html>