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
    $qry_get_siswa= mysqli_query($conn, "SELECT * FROM siswa WHERE nisn= '".$_GET['nisn']."'");
    $dt_siswa =mysqli_fetch_array($qry_get_siswa);
    ?>
    <h3>Ubah Siswa</h3>
    <form action="proses_ubah_siswa.php" method="POST">
    <table cellpadding="5">
    <input type="hidden" name="nisn" value="<?= $dt_siswa['nisn']; ?>">
        <tr>
            <td>NISN :</td>
            <td><input type="text" name="nisn" value="<?= $dt_siswa['nisn']; ?>"disabled></td>
        </tr>
        <tr>
            <td>NIS :</td>
            <td><input type="text" name="nis" value="<?= $dt_siswa['nis']; ?>"disabled></td>
        </tr>
        <tr>
            <td>Nama Siswa :</td>
            <td><input type="text" name="nama" value="<?= $dt_siswa['nama']; ?>"></td>
        </tr>
        <tr>
            <td>Kelas :</td>
            <td><select name="kelas" disabled>
                <?php
                include "../koneksi.php";
                $qry_kelas=mysqli_query($conn,"SELECT * FROM kelas");
                while($data_kelas=mysqli_fetch_assoc($qry_kelas)){
                    echo '<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas']. " | " .$data_kelas['kompetensi_keahlian'].'</option>'; 
                }
                ?>
                </select>
        </tr>
        <tr>
            <td>Alamat :</td>
            <td><input type="text" name="alamat" value="<?= $dt_siswa['alamat']; ?>"></td>
        </tr>
        <tr>
            <td>No. Telp :</td>
            <td><input type="text" name="no_telp" value="<?= $dt_siswa['no_telp']; ?>"></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit" name="simpan">Simpan</button></td>
            <td colspan="2"><a href="tampil_siswa.php" class="btn btn-outline-danger">Kembali</a></td>
        </tr>
    </table>
</from>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
crossorigin="anonymous"></script>
</body>
</html>