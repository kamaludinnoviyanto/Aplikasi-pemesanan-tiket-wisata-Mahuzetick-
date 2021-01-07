<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/custom.css">
</head>
<body>
  <h1 class="register-title">Welcome</h1>
  <form action="aksi_login.php" method="POST" class="register">
    <input type="text" required name="username"  class="register-input" placeholder="Username">
    <input type="password" required name="password" class="register-input" placeholder="Password">
    <p style="margin-top: 5px;">Belum daftar? Silahkan <a style="color:violet" href="register.php">daftar</a> </p>
    <button type="submit" class="register-button">MASUK</button>
  </form>
</body>
</html>
