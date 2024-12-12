<?php 

session_start();
if(!$_SESSION == 'admin'){
  header('location:../login.php');
}
include '../koneksi.php';


if(isset($_GET['q'])){
  $q = $_GET['q'];
}
else{
  $q = null;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>admin</title>
  <link rel="stylesheet" type="text/css" href="../assets/bootstrap-4.5.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/themify-icons/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
  <link rel="stylesheet" type="text/css" href="../assets/swal2/sweetalert2.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/select2-4.0.13/dist/css/select2.css">
  <link rel="stylesheet" type="text/css" href="../assets/DataTables/DataTables-1.10.20/css/dataTables.bootstrap4.min.css">
  

</head>
<body>
<div class="d-flex" id="wrapper">
  <div class="bg-white border-none sticky-top" id="sidebar-wrapper">
    <div class="sidebar-heading">
    <a href="index.php" class="navbar-merek">radCommerce </a> 
    </div>
    <div class="container-fluid bg-white" id="sidebar-profile">
      <div class="row pt-2 pb-2">
        <div class="col-md-4">
          <img src="../assets/img/profile/man.svg" class="rounded-circle" width="50" height="50">
        </div>
        <div class="col-md-8">
          <div class="admin-name text-black"><span>Ridho</span></div>
          <div class="admin-level text-black"><span><?= $_SESSION['level'];?></span></div>
        </div>
      </div>
      
    </div>
    <div class="list-group" id="list-group" style="">
     <a href="index.php" class="list-group-item list-group-item-action active">
      <i class="ti-pie-chart"></i> Dashboard 
     </a>
    
     <a class="list-group-item list-group-item-action" data-toggle="collapse" href="#produk" role="button" aria-expanded="false" aria-controls="produk"><i class="ti-package"></i> Produk 
      <span class="fa-accordion">
        <i class="ti-angle-down"></i>
        <!-- <i class="ti-angle-up"></i> -->
      </span>
     </a>
     <div class="collapse" id="produk">
      <a href="index.php?q=tambah_produk" class="list-group-item list-group-item-action"><i class="ti-pin-alt"></i> Tambah Produk</a>
      <a href="index.php?q=show_produk" class="list-group-item list-group-item-action"><i class="ti-pin-alt"></i> Lihat Produk</a> 
     </div>

     <a class="list-group-item list-group-item-action" data-toggle="collapse" href="#form" role="button" aria-expanded="false" aria-controls="form"><i class="ti-user"></i> Users <span><i class="ti-angle-down"></i></span>
     </a>
     <div class="collapse" id="form">
      <a href="" class="list-group-item list-group-item-action"><i class="ti-pin-alt"></i> All Users</a>
      
     </div>

     <a class="list-group-item list-group-item-action" data-toggle="collapse" href="#table" role="button" aria-expanded="false" aria-controls="table"><i class="ti-layout"></i> Table <span><i class="ti-angle-down"></i></span>
     </a>
     <div class="collapse" id="table">
      <a href="" class="list-group-item list-group-item-action"><i class="ti-pin-alt"></i> Basic Table</a>
      <a href="" class="list-group-item list-group-item-action"><i class="ti-pin-alt"></i> Data Table</a> 
     </div>

     <a class="list-group-item list-group-item-action" data-toggle="collapse" href="#charts" role="button" aria-expanded="false" aria-controls="charts"><i class="ti-bar-chart"></i> Charts <span><i class="ti-angle-down"></i></span>
     </a>
     <div class="collapse" id="charts">
      <a href="" class="list-group-item list-group-item-action"><i class="ti-pin-alt"></i> Chart Js</a>
      <a href="" class="list-group-item list-group-item-action"><i class="ti-pin-alt"></i> Flot Chart</a>
      <a href="" class="list-group-item list-group-item-action"><i class="ti-pin-alt"></i> Pie Chart</a> 
     </div>

     <a class="list-group-item list-group-item-action" data-toggle="collapse" href="#maps" role="button" aria-expanded="false" aria-controls="maps"><i class="ti-map-alt"></i> Maps <span><i class="ti-angle-down"></i></span>
     </a>
     <div class="collapse" id="maps">
      <a href="" class="list-group-item list-group-item-action"><i class="ti-pin-alt"></i> Google Maps</a>
      <a href="" class="list-group-item list-group-item-action"><i class="ti-pin-alt"></i> Vektor Maps</a> 
     </div>
     
     <a class="list-group-item list-group-item-action" data-toggle="collapse" href="#uielements" role="button" aria-expanded="false" aria-controls="uielements"><i class="ti-settings"></i> UI Elements <span><i class="ti-angle-down"></i></span>
     </a>
     <div class="collapse" id="uielements">
      <a href="" class="list-group-item list-group-item-action"><i class="ti-pin-alt"></i> Banner</a>
 
     </div>

    </div>
  </div>

  <div id="page-content-wrapper">
    <nav class="navbar navbar-expand-md">
      <button class="btn btn-default text-black" id="menu-toggle"><i class="ti-menu"></i></button>
      <form method="GET" action="" class="pl-2">
        <div class="form-search">
          <i class="ti-search"></i>
          <input type="text" class="form-control" placeholder="Search.." name="">
        </div>
      </form>
      <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="" class="nav-link"><i class="ti-email"></i></a></li>
          <li class="nav-item"><a href="" class="nav-link"><i class="ti-bell"></i></a></li>
          <li class="nav-item dropdown">
            <a href="" class="nav-link" data-toggle="dropdown"><i class="ti-user"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
             <a href="../authLogout.php" class="dropdown-item"><i class="ti-power-off"></i> Keluar</a> 
            </div>
          </li>
        </ul> 
    </nav>
    <?php
      if($q == null){
        include 'dashboard.php';
      }
      else{
        if($q == 'show_produk'){
          include 'tbl_produk.php';
        }
        if($q == 'tambah_produk'){
          include 'tambah_produk.php';
        }
        if($q == 'edit_produk'){
          include 'edit_produk.php';
        }
      }

    ?>
  </div>

</div>
</body>  
</html>
<script type="text/javascript" src="../assets/bootstrap-4.5.0/jquery-3.4.1/jquery-3.4.1.js"></script>
<script type="text/javascript" src="../assets/bootstrap-4.5.0/dist/js/bootstrap.js"></script>
<script type="text/javascript" src="../assets/select2-4.0.13/dist/js/select2.js"></script>
<script type="text/javascript" src="../assets/DataTables/DataTables-1.10.20/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="../assets/DataTables/DataTables-1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="../assets/swal2/sweetalert2.min.js"></script>
<script type="text/javascript" src="../assets/js/main.js"></script>
