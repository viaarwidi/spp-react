<!DOCTYPE html>
    <html>
        <head>
            <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
            <title></title>
        </head>
    <body>
        <h3>Tambah Petugas</h3>
        <form action="proses_tambah_petugas.php" method="post">

            id_petugas :
            <input type="number" name="id_petugas" value="" class="form-control">

            username :
            <input type="text" name="username" value="" class="form-control">

            password :
            <input type="password" name="password" value="" class="form-control">

            nama_petugas:
            <input type="text" name="nama_petugas" value="" class="form-control">

            level :
            <select name="level" class="form-control">
                        <option></option>
                        <option value="admin">admin</option>
                        <option value="petugas">petugas</option>
                    </select>
            <input type="submit" name="submit" value="Tambah Petugas" class="btn btn-primary">
        </form>
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
    </html>