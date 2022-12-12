<?php
    require('../koneksi.php');
    session_start();
    // If form submitted, insert values into the database.
   
	if (isset($_POST['username'])){
			$username = stripslashes($_REQUEST['username']);
        //removes backslashes
        $username = mysqli_real_escape_string($conn,$username); //escapes special characters in a string
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn,$password);
        //Checking is user existing in the database or not
        $query = "SELECT * FROM petugas WHERE username='$username' AND password='".($password)."'";
        $result = mysqli_query($conn,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if($rows==1){
          $data_petugas= mysqli_fetch_assoc($result);
 
          // cek jika user login sebagai admin
          if($data_petugas['level']=="admin"){
         
            // buat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "admin";
            // alihkan ke halaman dashboard admin
            header("location:index_admin.php");
         
          // cek jika user login sebagai pegawai
          }else if($data_petugas['level']=="petugas"){
            // buat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "petugas";
            // alihkan ke halaman dashboard pegawai
            header("location:index_petugas.php");
         
          // cek jika user login sebagai pengurus
          } else{
         
            // alihkan ke halaman login kembali
            header("location:choose.php?pesan=gagal");
          }
        }else{
            echo '<script>alert("Username atau password Anda salah!")</script>';
        }
    }else{ }
?>