<?php

$id = $_GET['id_produk'];
$kondisi = "WHERE id_produk = $id";
$table = 'produk';
$field = '*';
$sql = "SELECT ".$field." FROM ".$table." WHERE id_produk = ".$id."";
$result = mysqli_query($koneksi,$sql);
$fetch = mysqli_fetch_array($result);
?>

<div class="container-fluid mt-3" id="main-admin">
<div class="breadcrumb bg-white ">
  <li class="breadcrumb-item">Dashboard</li>
  <li class="breadcrumb-item active">Edit</li>	
</div>

<div class="card" style="border: none;">
 <div class="card-header bg-white">
  
 </div>
 <div class="card-body">
  <form action="" method="POST" class="mt-3">
   <div class="row">
   	<div class="col-md-6">
   	<div class="form-group">
   	<input type="text" value="<?= $fetch['id_produk'];?>" class="form-control" name="">	
   	</div>
   	<div class="form-group">
   	<input type="text" value="<?= $fetch['nama'];?>" class="form-control" name="">	
   	</div>
   	<div class="form-group">
   	<input type="text" value="Rp.<?= $fetch['harga'];?>" class="form-control" name="">	
   	</div>
   	<div class="form-group">
   	<input type="text" value="<?= $fetch[merk];?>" class="form-control" name="">	
   	</div>
   	<div class="form-group">
   	<input type="text" value="<?= $fetch['stok'];?>" class="form-control" name="">	
   	</div>
   </div>
   <div class="col-md-6">
   	
   	<div class="form-group">
   	<img src="../assets/gambar/produk/<?= $fetch[gambar];?>" width="100">	
   	<input type="file" value="<?= $fetch[gambar];?>" class="form-control" name="">	
   	</div>
   	<div class="row">
   	 <div class="col-md-6">
   	 <button class="btn btn-success" name="edit" style="width: 100%;">Edit</button>	
   	 </div>
   	 <div class="col-md-6">
   	 <a href="index.php?q=show_produk" class="btn btn-danger" style="width: 100%">Batal</a>	
   	 </div>	
   	</div>
   	
   </div>
   </div>	
  </form>
 </div>	
</div>