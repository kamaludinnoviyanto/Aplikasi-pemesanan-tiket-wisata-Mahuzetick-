<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Registration Form</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/custom.css">
</head>
<body>
  <h1 class="register-title">Welcome</h1>
  <form action="aksi_register.php" class="register" method="POST">
    <input type="text" name="username" class="register-input" placeholder="Username">
    <input type="text" name="nama" class="register-input" placeholder="Nama">
    <input type="text" name="tgl_lahir" class="register-input" placeholder="Tanggal Lahir">
    <input type="text" name="alamat" class="register-input" placeholder="Alamat">
    <input type="text" name="no_hp" class="register-input" placeholder="Nomor HP">
    <input type="password" name="password" class="register-input" placeholder="Password">
    <button type="submit" class="register-button"> Create Account </button>
  </form>
</body>
</html>
