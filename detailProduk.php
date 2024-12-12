<?php
include 'header.php';
include 'koneksi.php';

?>

<div class="detail-produk bg-white pt-2 pb-5 ">
  <?php
    $id = $_GET['id_produk'];
    $kondisi = "WHERE id_produk = $id";
    $sql = "SELECT * FROM produk WHERE id_produk = $id";
    $exe = mysqli_query($koneksi,$sql);
    $ftch = mysqli_fetch_assoc($exe);
  ?>
 <div class="container col-md-11" >
  <ol class="breadcrumb mb-0 mt-0 pl-0">
   <li class="breadcrumb-item"><a href="index.php">Home</a></li>
   <li class="breadcrumb-item">Detail Produk</li>
   <li class="breadcrumb-item"><?= $ftch['merek'];?></li>
   <li class="breadcrumb-item active"><?= $ftch['kategori'];?></li>
  </ol><hr class="mt-0">
   <div class="card mb-2">
    <div class="card-body">
      <div class="row">
        <div class="col-md-4">
         <img src="assets/img/produk/<?= $ftch['gambar'];?>" class="img-fluid" alt=""> 
        </div> 
        <div class="col-md-8">
         <form action="" method="POST">
         <h3><?= $ftch['namaproduk'];?></h3> 
         <h6>merek : <?= $ftch['merek'];?></h6>
         <hr>
         <h6>Harga : <span style="font-size: 24px;">Rp. <?= number_format($ftch['harga']);?></span></h6>
         <hr>
         <h6>Jumlah : 
          <!-- <div class="btn-group">
           <button class="btn btn-minus"><i class="ti-minus"></i></button>
            <input type="text" value="1" class="" name="">
           <button class="btn btn-plus"><i class="ti-plus"></i></button> 
          </div> -->
         <input type="number" class="input-number" value="1">
         </h6>
         <hr>
         <div class="btn-order">
          <button class="btn btn-beli" id="beli">Beli Sekarang</button>
          <!-- <button class="btn btn-default" name="addcart" id="troli" style="background-image: linear-gradient(100deg, #A162F5, #C066FF); ">Tambah Troli</button> -->
          
          <button class="btn btn-wishlist" name="addwishlist" id="wishlist" style="">Wishlist</button>
          <input type="hidden" name="id_produk" value="<?= $ftch['id_produk'];?>" >
         </div>
         <hr>
         <h6>Spesifikasi</h6> 
         </form>
        </div> 
       </div>  
    </div>
   </div>
  </div> 
</div>

<div class="rc-produk-rekomendasi bg-white mt-2 mb-2 pt-5 pb-5">
 <div class="container col-md-11">
  <div class="title-head">
    <p>Produk Rekomendasi</p><hr>
  </div>
 </div> 
</div>
<?php
require_once 'footer.php';
?>

<style type="text/css">



.detail-produk .breadcrumb{
  background: transparent;
}  
.detail-produk .breadcrumb .breadcrumb-item a{
  text-decoration: none;
  color: #000;
}

.detail-produk .col-md-8 .btn-group .btn{
  color: #FFF;
  height: 40px;
  background-image: linear-gradient(180deg, #A162F5, #C066FF);
}
.detail-produk .col-md-8 .btn-group input{
  width: 50px;
  padding-left: 20px;
  outline: none;
  border: none;
}  
.detail-produk .col-md-8 .btn-order .btn-beli{
  background-image: linear-gradient(100deg,#FFC600,#E8CE09);
  color: #FFF;
  height: 40px;
}
.detail-produk .col-md-8 .btn-order .btn-wishlist{
  background-image: linear-gradient(100deg, #FF0080, #FF2159);
  color: #FFF;
  height: 40px;
}

</style>