<?php
    include "../koneksi.php";
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query=mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password'");
    $data = mysqli_fetch_array($query);
    if($data != 0){
        session_start();
        $_SESSION['username'] = $username;
        header('location:lokasi.php');
        //jika berhasil di delete langsung beralih ke index.php atau tampilan awal
    } else {        
        //var_dump("SELECT * FROM user WHERE username='$username' AND password='$password'");
        //jika tidak berhasil tampil tulisan gagal
        echo "username dan password salah";
    }
?>