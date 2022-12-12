<!DOCTYPE html>
    <html>
        <head>
            <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
            <title></title>
        </head>
    <body>
        <h3>Tambah Kelas</h3>
        <form action="proses_tambah_kelas.php" method="post">

            id_kelas :
            <input type="number" name="id_kelas" value="" class="form-control">

            nama_kelas :
            <input type="text" name="nama_kelas" value="" class="form-control">
            
           Kompetensi Keahlian :
           <input type="text" name="kompetensi_keahlian" value="" class="form-control">
            
            <input type="submit" name="submit" value="Tambah Kelas" class="btn btn-primary">
        </form>
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
    </html>