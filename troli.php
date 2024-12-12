<?php

session_start();
include 'header.php';
include 'koneksi.php';
$sql = mysqli_query($koneksi,"SELECT * FROM produk");

if(!isset($_SESSION['level'])){
  header('location:login.php');
}
else{
  $_SESSION['level'] = 'customer';
}


if(isset($_POST['hapus'])){
  // print_r($_GET['id_produk']);
  if($_GET['aksi'] == 'hapus'){
    foreach($_SESSION['cart'] as $key => $value){
      if($value["id_produk"] == $_GET['id_produk']){
        unset($_SESSION['cart'][$key]);
      }
    }

  }
}




?>

<div class="rc-troli bg-white pt-3 pb-3">
 <div class="container">
  <div class="col-md-11">
    <ol class="breadcrumb mb-0 pl-0" style="background-color: transparent;">
     <li class="breadcrumb-item"><a href="index.php">Home</a></li>
     <li class="breadcrumb-item active">Troli</li>
    </ol><hr class="mt-0">
    <div class="row">
    <div class="col-md-7">
      <?php
      $total = 0;
      if(isset($_SESSION['cart'])){
        $id_produk = array_column($_SESSION['cart'],"id_produk");
        $result = $sql;
        while($row = mysqli_fetch_assoc($result)){
          foreach($id_produk as $produk){ 
            if($row['id_produk'] == $produk){ ?>
            <form action="troli.php?aksi=hapus&id_produk=<?= $row['id_produk'] ?>" method="POST"> 
            <div class="card mb-2">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-2">
                    <img src="assets/img/produk/<?= $row['gambar'];?>" class="img-fluid" alt="">
                  </div>
                  <div class="col-md-5">
                    <div class="info-produk pt-2">
                      <h5 class="text-black"><?= $row['nama']; ?></h5>
                      <!-- <h6 class="">merek : <?= $row[merk]; ?></h6> -->
                      <h6 class="">Rp. <?= number_format($row['harga']); ?></h6>          
                    </div>
                  </div>
                  <div class="col-md-5 pt-5">
                    <div class="float-right pr-3">
                      
                    <input type="number" class="input-number" value="1" name="">
                    <button class="btn btn-hapus text-white" style="" name="hapus">Hapus</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </form>
            <?php 
            $total = $total + (int)$row['harga']; }
            
          }    
        }
  
      }
      else{?>
        <h5><i class="ion ion-ios-cart"></i> Troli Masih Kosong</h5>
          
  
      <?php }
  
      
      ?>
      
    </div>
    <div class="col-md-5">
      <div class="card">
      <div class="card-body">
      <h6 class="card-text"><b>Ringkasan Pembayaran </b></h6>
        <div class="row">
        <div class="col-md-5">
          <h6>Jumlah Barang</h6>
          <h6>Biaya Pengiriman</h6>
          <h6>Total </h6>
        </div>
        <div class="col-md-7">
          <?php
          if(isset($_SESSION['cart'])){
            $count = count($_SESSION['cart']);
            echo "<h6>: $count</h6>";
          }
          ?>
          <h6>: Gratis</h6> 
          <h6>: Rp. <?= number_format($total);?></h6>
        </div> 
        </div>
        <button class="btn btn-default text-white w-100" style="background-image: linear-gradient(180deg,#C066FF ,#A162F5);">Bayar</button>
      </div> 
      
      </div> 
    </div>      
    </div>  
  </div>
  </div> 
</div>

<div class="rc-rekomendasi bg-white mt-2 pt-3 pb-3">
 <div class="container ">
  <div class="col-md-11">
    <h6>Rekomendasi Produk</h6><hr>
    <div class="row">
      
    </div> 
  </div>
 </div> 
</div>

<?php
require_once 'footer.php';
?>  

<style type="text/css">
.rc-troli .breadcrumb .breadcrumb-item a{
  text-decoration: none;
  color: #C066FF;
}
.rc-troli .col-md-7 .col-md-5 .btn-hapus{
  background-image: linear-gradient(180deg, #FF0000, #CC1F1F);
  border: none;
}
  
</style>