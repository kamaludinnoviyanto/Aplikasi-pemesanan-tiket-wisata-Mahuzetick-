<?php 
    include "../koneksi.php";

    $id_lokasi = $_GET['id_lokasi'];

    //hapus data karyawan
    $query= mysqli_query($koneksi,"DELETE FROM lokasi WHERE id_lokasi='$id_lokasi'");
    if($query){
        header('location:lokasi.php');
        //jika berhasil di delete langsung beralih ke index.php atau tampilan awal
    } else {
        //jika tidak berhasil tampil tulisan gagal
        echo "gagal";
    }
?>