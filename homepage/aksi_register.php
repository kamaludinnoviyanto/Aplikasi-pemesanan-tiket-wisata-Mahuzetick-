<?php 
    include "../koneksi.php";

    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $password = $_POST['password'];

    //menjalankan perintah query mysql di php
    $query = mysqli_query($koneksi,"INSERT INTO user VALUES('$username','$nama','$tgl_lahir','$alamat', '$no_hp', '$password')");
    if($query){
        header('location:login.php');
        //jika berhasil di delete langsung beralih ke index.php atau tampilan awal
    } else {
        //jika tidak berhasil tampil tulisan gagal
        echo "gagal";
    }
?>