<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if(!isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login
  header("location: login.php"); // Kita Redirect ke halaman index.php karena belum login
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php 
                include "../koneksi.php";
                $id = $_GET['id_lokasi'];
                $sql = mysqli_query($koneksi,"SELECT * FROM lokasi WHERE id_lokasi='$id'");
                $data = mysqli_fetch_array($sql);
            ?>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                <div>
                    <img width="350px" src="../admin/upload/<?= $data['gambar'] ?>">
                    <p> Harga: <?= $data['harga'] ?> </p>
                    <p> Deskripsi: <?= $data['deskripsi'] ?> </p>
                    <form action="aksi_pembayaran.php" method="post" enctype="multipart/form-data">
                        <p>Silahkan transfer ke Rekening BCA 54109381030 a.n. PT.Membumbung Tinggi Ke Angkasa</p>
                        <p> <input type="hidden" name="username" value="<?= $_SESSION['username'] ?>"> </p>
                        <p> <input type="hidden" name="id_lokasi" value="<?= $id ?>"> </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>