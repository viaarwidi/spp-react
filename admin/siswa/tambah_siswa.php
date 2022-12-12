<!DOCTYPE html>
    <html>
        <head>
            <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
            <title></title>
        </head>
    <body>
        
        <h3>Tambah siswa</h3>
        <form action="proses_tambah_siswa.php" method="POST">
     
        
            Nisn :
            <input type="text" name="nisn" value="" class="form-control">
        
            Nis :
            <input type="text" name="nis" value="" class="form-control">
        
            Nama : 
            <input type="text" name="nama" value="" class="form-control">
           
            id_kelas:
            <br><select name="id_kelas" value="<?= $dt_siswa['id_kelas']; ?>">
                <?php
                include "koneksi.php";
                $qry_kelas=mysqli_query($conn,"SELECT * FROM kelas");
                while($data_kelas=mysqli_fetch_assoc($qry_kelas)){
                    echo '<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas']. " | " .$data_kelas['kompetensi_keahlian'].'</option>'; 
                }
                ?>
                </select><br>
          
        
            Alamat :
            <input type="text" name="alamat" value="" class="form-control">
            

            No_telp:
            <input type="text" name="no_telp" value="" class="form-control">

            Id_SPP:
            <input type="number" name="id_spp" value="" class="form-control">

            <input type="submit" name="submit" value="Tambah Siswa" class="btn btn-primary">
        </form>
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
    </html>