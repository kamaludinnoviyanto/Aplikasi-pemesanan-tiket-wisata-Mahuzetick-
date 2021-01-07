<?php 
    include "../koneksi.php";

    $username = $_GET['username'];

    //hapus data karyawan
    $query= mysqli_query($koneksi,"DELETE FROM user WHERE username='$username'");
    if($query){
        header('location:pengguna.php');
        //jika berhasil di delete langsung beralih ke index.php atau tampilan awal
    } else {
        //jika tidak berhasil tampil tulisan gagal
        echo "gagal";
    }
?>