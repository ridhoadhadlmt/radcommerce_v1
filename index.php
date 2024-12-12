<?php
  session_start();
  include 'koneksi.php';
?>

<?php
if(isset($_POST['addcart'])){
  // print_r($_POST['id_produk']);

  if(isset($_SESSION['cart'])){
    $item_array_id =  array_column($_SESSION['cart'],'id_produk');

    if(in_array($_POST['id_produk'],$item_array_id)){
      echo "<script>alert('Produk telah ditambahkan di Troli') </script>";
      echo "<script>window.location='index.php'</script>";
    }
    else{
      $count =  count($_SESSION['cart']);    
      $item_array = array(
      'id_produk' => $_POST['id_produk']
    );
    $_SESSION['cart'][$count] = $item_array;
    // print_r($_SESSION['cart']);    
    }
  }
  else{
    $item_array = array(
      'id_produk' => $_POST['id_produk']
    );

    $_SESSION['cart'][0]= $item_array;
    // print_r($_SESSION['cart']);
  }
}

if(isset($_POST['addwishlist'])){
  // print_r($_POST['id_produk']);

  if(isset($_SESSION['wishlist'])){
    $item_array_id =  array_column($_SESSION['wishlist'],'id_produk');

    if(in_array($_POST['id_produk'],$item_array_id)){
      echo "<script>alert('Produk telah ditambahkan di Wishlist') </script>";
      echo "<script>window.location='index.php'</script>";
    }
    else{
      $count =  count($_SESSION['wishlist']);    
      $item_array = array(
      'id_produk' => $_POST['id_produk']
    );
    $_SESSION['wishlist'][$count] = $item_array;
    // print_r($_SESSION['wishlist']);    
    }
  }
  else{
    $item_array = array(
      'id_produk' => $_POST['id_produk']
    );

    $_SESSION['wishlist'][0]= $item_array;
    // print_r($_SESSION['wishlist']);
  }
}

?>


<?php
  include 'header.php';
  
?>

<!-- Carousel -->

<div class="rc-carousel bg-white pt-3 pb-3">
 <div class="container col-md-11">
  <div class="owl-carousel owl-theme">
   <?php
     $sql = "SELECT * FROM banner ORDER BY id_banner ASC LIMIT 1,4";
     $result = mysqli_query($koneksi,$sql);
     foreach($result as $banner):
    ?>
   <div class="row">
     <div class="col-md-12">
        <img src="assets/img/carousel/<?= $banner['gambar'];?>" height="280">  
     </div> 
   </div> 
   <?php
  endforeach;
    ?>
  </div>
 </div> 
</div>

<div class="rc-kategori-produk pt-4 pb-4 mt-2 bg-white">
 <div class="container col-md-11">
  <div class="slick-kategori">
    <div class="slick-item">
     <div class="card card-lg">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <img src="assets/img/kategori/gamer.png" class="img-fluid" style="">
          </div>
          <div class="col-md-6">
            <h6 class="card-text">Laptop Gaming</h6>
            <h5 class="card-text">0 Item</h5>
          </div>
        </div> 
      </div>
     </div>    
    </div>
    <div class="slick-item">
     <div class="card card-ap">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <img src="assets/img/kategori/apple.png" class="img-fluid" style="">
          </div>
          <div class="col-md-6">
            <h6 class="card-text">Apple Products</h6>
            <h5 class="card-text">0 Item</h5>
          </div>
        </div> 
      </div> 
     </div>    
    </div>
    <div class="slick-item">
     <div class="card card-st">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <img src="assets/img/kategori/fd.png" class="img-fluid" style="">
          </div>
          <div class="col-md-6">
            <h6 class="card-text">Storage Tools</h6>
            <h5 class="card-text">0 Item</h5>
          </div>
        </div> 
      </div> 
     </div>    
    </div>
    <div class="slick-item">
     <div class="card card-as">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <img src="assets/img/kategori/android.png" class="img-fluid" style="">
          </div>
          <div class="col-md-6">
            <h6 class="card-text">Android Smartphones</h6>
            <h5 class="card-text">0 Item</h5>
          </div>
        </div> 
      </div> 
     </div>    
    </div>
    <div class="slick-item">
     <div class="card card-gt">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <img src="assets/img/kategori/ps.png" class="img-fluid" style="">
          </div>
          <div class="col-md-6">
            <h6 class="card-text">Gaming Tools</h6>
            <h5 class="card-text">0 Item</h5>
          </div>
        </div> 
      </div>
     </div>    
    </div>  
    <div class="slick-item">
     <div class="card card-ot">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <img src="assets/img/kategori/printer.png" class="img-fluid" style="">
          </div>
          <div class="col-md-6">
            <h6 class="card-text">Office Tools</h6>
            <h5 class="card-text">0 Item</h5>
          </div>
        </div>
      </div> 
     </div>    
    </div>
   </div>
  </div> 
</div>


<div class="rc-dod mt-2 mb-2 pt-5 pb-5 bg-white">
 <div class="container col-md-11">
   <div class="row">
     <div class="col-md-3">
      <h3 width="100">Deals Of The Days</h3> 
     </div>
     <div class="col-md-9">
       <div class="slick-flashsale" style="">
        <?php 
          $sql = "SELECT * FROM produk LIMIT 12,6";
          $result = mysqli_query($koneksi,$sql);
          foreach($result as $flashsale):
        ?>
        <div class="slick-item">
          <div class="card mr-1">
            <div class="card-body">
              <img src="assets/img/produk/<?= $flashsale['gambar'];?>" class="img-fluid"> 
              <h6 class="card-text mb-0"> <?= $flashsale['nama'];?></h6>
              <h6 class="card-text mb-0">Rp. <?= number_format($flashsale['harga']);?></h6>
            </div>
          </div>
        </div> 
        <?php
         endforeach;
        ?>  
      </div>
     </div> 
   </div>
 </div> 
</div>

<div class="rc-banner mt-2 mb-2 pt-4 pb-4 bg-white">
  <div class="container col-md-11">
    <img src="assets/img/banner/large-banner.jpg" class="img-fluid">
    <div class="row mt-3">
      <div class="col-md-3">
        <img src="assets/img/banner/b1.jpg" class="img-fluid">
      </div>
      <div class="col-md-3">
        <img src="assets/img/banner/b2.jpg" class="img-fluid">
      </div>
      <div class="col-md-3">
        <img src="assets/img/banner/b3.jpg" class="img-fluid">
      </div>
      <div class="col-md-3">
        <img src="assets/img/banner/b4.jpg" class="img-fluid">
      </div>
    </div>
  </div>  
</div>

<div class="rc-produk-terbaru bg-white pt-4 pb-4 mt-2">
 <div class="container col-md-11">
  <p>Produk terbaru <span class="float-right"><a href="">Lihat semua</a></span></p><hr>
  <div class="row">
   <?php
    $sql = "SELECT * FROM produk LIMIT 8,6";
    $result = mysqli_query($koneksi,$sql);
    foreach($result as $produk):
   ?> 
   <div class="col-md-2 mb-3">
    <form action="" method="POST">
      <div class="card p-2">
       <a href="detailProduk.php?id_produk=<?= $produk['id_produk'];?>">
       <div class="card-body">
        <img src="assets/img/produk/<?= $produk['gambar'];?>" class="" width="100%" height="140" >
        <p class="card-text mb-0" id="nama-produk"><?= $produk['nama'];?></p> 
        <p class="card-text mb-0" id="harga">Rp. <?= number_format($produk['harga']);?></p>  
        <div class="d-flex">
          <button class="btn btn-light w-50 text-white cart" name="addcart"><i class="pe-7s-cart"></i></button>
          <input type="hidden" name="id_produk" value="<?= $produk['id_produk'];?>"> 
          <button class="btn btn-light w-50 text-white wishlist" name="addwishlist"><i class="pe-7s-like"></i></button>
          <input type="hidden" name="id_produk" value="<?= $produk['id_produk'];?>"> 
        </div>
        </a>
       </div>
        
      </div>
    </form> 
   </div>
   <?php
 endforeach;
   ?> 
  </div> 
 </div> 
</div>

<div class="rc-produk-palingdicari bg-white pt-4 pb-4 mt-2">
 <div class="container col-md-11">
  <p>Paling banyak dicari <span class="float-right"><a href="">Lihat semua</a></span></p><hr>
  <div class="row">
   <?php
    $sql = "SELECT * FROM produk LIMIT 12,6";
    $result = mysqli_query($koneksi,$sql);
    foreach($result as $palingdicari):
   ?> 
   <div class="col-md-2 mb-3">
    <form action="" method="POST">
      <div class="card p-2">
       <a href="detailProduk.php?id_produk=<?= $palingdicari['id_produk'];?>">
         <div class="card-body">
          <img src="assets/img/produk/<?= $palingdicari['gambar'];?>" class="" width="100%" height="140" >
          <p class="card-text mb-0" id="nama-produk"><?= $palingdicari['nama'];?></p> 
          <p class="card-text mb-0" id="harga">Rp. <?= number_format($palingdicari['harga']);?></p>  
          <div class="d-flex">
            <button class="btn btn-light w-50 text-white cart" name="addcart"><i class="pe-7s-cart"></i></button>
            <input type="hidden" name="id_produk" value="<?= $palingdicari['id_produk'];?>"> 
            <button class="btn btn-light w-50 text-white wishlist" name="addwishlist"><i class="pe-7s-like"></i></button>
            <input type="hidden" name="id_produk" value="<?= $palingdicari['id_produk'];?>"> 
          </div>
         </div>
       </a> 
      </div>
    </form> 
   </div>
   <?php
 endforeach;
   ?> 
  </div> 
 </div> 
</div>



<?php
require_once 'footer.php';
?>