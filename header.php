<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>radcommerce</title>
  
  <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.5.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/jquery.nice-number.css">
  <link rel="stylesheet" type="text/css" href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
  <link rel="stylesheet" type="text/css" href="assets/owlCarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="assets/owlCarousel2/dist/assets/owl.theme.default.min.css">
  <link rel="stylesheet" type="text/css" href="assets/slick-slider/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="assets/slick-slider/slick/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="assets/css/index.css">
</head>
<body>
<nav class="navbar navbar-expand-md sticky-top" id="navbar">
<div class="container col-md-11">
 <div class="col-md-2">
    <a href="index.php" class="navbar-merek"> radCommerce</a>   
    <!-- <button class="btn btn-kategori dropdown" data-toggle="dropdown" id="kategori"><i class="ti-layout-grid2-alt text-white"></i>
      <div class="dropdown-menu dropdown-menu-left" style="">
       <?php
        foreach($q_kategori as $kategori):
       ?>
       <p class="mb-0 pl-3 pt-2 pb-2 dropdown-item" style=""><img src="assets/gambar/icon/<?= $kategori[gambar];?>" class="pr-2" height="20"> <?= $kategori['kategori_produk'];?> </p>
       <?php
        endforeach;
       ?>
       </div>
    </button> -->
  </div>
  
  <div class="col-md-6 pl-0 pr-0">
   <form action="search.php" class="form-search" method="GET">
    <div class="form-group mb-0">
      <input type="text" placeholder="" class="w-100" id="search" name="search">
       <i class="pe-7s-search"></i>
      </div>
      <button>Cari</button>
   </form>  
  </div>
  <div class="col-md-4 pr-0">
    <div class="rc-btn-order">
      <div class="float-left pl-3">
        <a href="" class="btn btn-default text-white"><i class="pe-7s-like"></i> <span class="badge badge-danger">
        <?php
          if(isset($_SESSION['wishlist'])){
            $count = count($_SESSION['wishlist']);
            echo $count;
          }
          
          else{
            echo "0";
          }
        ?>  
        </span></a>
        <a href="troli.php" class="btn btn-default text-white"><i class="pe-7s-cart"></i> <span class="badge badge-danger">
        <?php
          if(isset($_SESSION['cart'])){
            $count = count($_SESSION['cart']);
            echo $count;
          }
          else{
            echo "0";
          }
        ?>
        </span></a> 
      </div>
    </div>
    <div class="rc-btn-session">
      <div class="float-right pr-0">
        <?php
          if(isset($_SESSION['level'])){?>
            <div class="dropdown">
             <button class="btn btn-user text-white" data-toggle="dropdown"><i class="pe-7s-user"></i></button>
             <div class="dropdown-menu dropdown-menu-right">
              <a href="authLogout.php" class="dropdown-item">Keluar</a> 
             </div> 
            </div>  
          <?php }

          else{?>
            <a href="login.php" class="btn btn-default btn-login">Login</a>
            <a href="daftar.php" class="btn btn-default bg-white btn-signup">Daftar</a>
          <?php }
        ?>
       </div> 
     </div>
  </div>	
</div> 	
</nav>

<!-- <nav class="navbar navbar-expand-md bg-white">
 <ul class="navbar-nav">
  <a href="" class="nav-item nav-link"></a> 
 </ul> 
</nav>
 -->