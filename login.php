<!DOCTYPE html>
<html>
<head>
<title>login</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="">
 <meta name="author" content="">
 <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.5.0/dist/css/bootstrap.css">
 <link rel="stylesheet" type="text/css" href="assets/css/login.css">
 <link rel="stylesheet" type="text/css" href="assets/swal2/sweetalert2.min.css">
 <style type="text/css">
 	
 </style>
</head>
<body>
<img src="assets/img/login/acces.png" class="bg-login">	
<form action="authLogin.php" method="POST" class="form-login">
 <div class="card">
  <div class="card-body">
   <h4 class="text-left">Masuk <span class="float-right"><a href="daftar.php">Daftar</a></span></h4>
   <div class="form-group" id="email">
    <label>Email</label>
    <input type="email" class="" name="email">
    <span class="warning">contoh:email@radcommerce.com</span>
   	<!-- <div class="input-group">
     <div class="input-group-prepend">
      <div class="input-group-text bg-white">
       <i class="ion ion-email"></i> 
      </div> 
     </div> 
    <input type="email" placeholder="Email" class="" name="email"> 
    </div> -->

   </div>
   <label>Password</label>
   <div class="form-group" id="password">
    <input type="password" class="" name="password">
    <!-- <div class="input-group">
     <div class="input-group-prepend">
      <div class="input-group-text bg-white">
       <i class="ion ion-key"></i> 
      </div> 
     </div> 
    <input type="password" placeholder="Password" class="" name="password">
    </div> -->
   </div>
   <div class="form-group">
     <button class="btn btn-default" type="submit" name="login">LOGIN</button>
   </div>	
   <div class="footer-title-login text-center">
     <span>Belum punya akun radcommerce?<a href="daftar.php"> Daftar</a></span>
   </div>
  </div>	
 </div>	
</form>
</body>
</html>
