<!DOCTYPE html>
<html>
<head>
<title>daftar</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="">
 <meta name="author" content="">
 <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.5.0/dist/css/bootstrap.css">
 <link rel="stylesheet" type="text/css" href="assets/css/daftar.css">
 <style type="text/css">
 	
 </style>
</head>
<body>
	
<form action="daftar.php" method="POST" class="form-daftar">
 <div class="card">
  <div class="card-body">
   <div class="head-title-daftar text-center">
     <h4 class="">Daftar Sekarang</h4>
      <p>Sudah punya akun radcommerce? <a href="login.php">Masuk</a></p>
   </div>
   <div class="form-group" id="email">
    <label>Email</label>
    <input type="email" class="form-control"  name="email">
    <span class="warning">contoh: email@radcommerce.com</span>
   </div>
   <div class="form-group" id="password">
    <label>Password</label>
    <input type="password" class="form-control" name="password">
   </div>
   <div class="form-group">
     <button class="btn btn-default btn-daftar text-white w-100" type="submit" name="login">Daftar</button>
   </div>	
   <div class="footer-title-daftar text-center mt-3">
     <span class="">Dengan mendaftar, saya menyetujui <a href="">Syarat dan ketentuan</a> serta <a href="">Kebijakan Privasi</a></span>
   </div>
  </div>	
 </div>	
</form>
</body>
</html>
