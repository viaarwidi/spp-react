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
    $qry_get_petugas= mysqli_query($conn, "SELECT * FROM petugas WHERE id_petugas= '".$_GET['id_petugas']."'");
    $dt_petugas =mysqli_fetch_array($qry_get_petugas);
    ?>
    <h3>Ubah Petugas</h3>
    <form action="proses_ubah_petugas.php" method="POST">
    <table cellpadding="5">
    <input type="hidden" name="id_petugas" value="<?= $dt_petugas['id_petugas']; ?>">
        <tr>
            <td>Id Petugas :</td>
            <td><input type="text" name="id_petugas" value="<?= $dt_petugas['id_petugas']; ?>"disabled></td>
        </tr>
        <tr>
            <td>Usernmae :</td>
            <td><input type="text" name="username" value="<?= $dt_petugas['username']; ?>"></td>
        </tr>
        <tr>
            <td>Password :</td>
            <td><input type="password" name="password" value="<?= $dt_petugas['password']; ?>"></td>
        </tr>
        <tr>
            <td>Nama Petugas :</td>
            <td><input type="text" name="nama_petugas" value="<?= $dt_petugas['nama_petugas']; ?>"></td>
        </tr>
        <tr>
            <td>Level :</td>
            <td><select name="level" disabled>
                        <option value="admin">admin</option>
                        <option value="petugas">petugas</option>
                    </select>
        <tr>
            <td colspan="2"><button type="submit" name="simpan">Simpan</button></td>
            <td colspan="2"><a href="tampil_petugas.php" class="btn btn-outline-danger">Kembali</a></td>
        </tr>
    </table>
</from>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
crossorigin="anonymous"></script>
</body>
</html>