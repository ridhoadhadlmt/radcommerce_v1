
<?php

if(isset($_POST['tambah'])){
	$namaproduk = $_POST['namaproduk'];
	$harga = $_POST['harga'];
	$merek = $_POST[merk];
	$kategori = $_POST['kategori'];
	$stok = $_POST['stok'];
	$namafile = $_FILES[gambar]['name'];
	$source = $_FILES[gambar]['tmp_name'];
	$folder = "../assets/gambar/produk/";
	$exe_img = move_uploaded_file($source,$folder.$namafile);

	$table = 'produk';
	$field = array('namaproduk,harga,merek,kategori,stok,image');
	$value = array("'$namaproduk'","'$harga'","'$merek'","'$kategori'","'$stok'","'$namafile'");
	createProduct($table,$field,$value);
}
?>

<div class="container-fluid mt-3">
 <div class="breadcrumb pl-0" style="background: transparent;">
  <li class="breadcrumb-item">Dashboard</li>
  <li class="breadcrumb-item active">Tambah Produk</li>	
 </div>	
 <div class="card">	
 	<div class="card-body" >
	  <form action="" method="POST" enctype="multipart/form-data"> 
	   <div class="form-group">
	   	<input type="text" class="form-control" placeholder="Nama Produk" name="namaproduk">
	   </div>
	   <div class="form-group">
	   	<input type="text" class="form-control" placeholder="Harga" name="harga">
	   </div>	
	   <div class="form-group">
	   	<select class="js-example-basic-single form-control " id="merek" name="merek">
	   	 <option>merek</option>
	   	 <option value="Asus">Asus</option>
	   	 <option value="Lenovo">Lenovo</option>
	   	 <option value="HP">HP</option>	
	   	 <option value="Dell">Dell</option>
	   	 <option value="Apple">Apple</option>
	   	 <option value="Vivo">Vivo</option>
	   	 <option value="Samsung">Samsung</option>
	   	 <option value="Xiaomi">Xiaomi</option>
	   	 <option value="Huawei">Huawei</option>
	   	 <option value="Oppo">Oppo</option>
	 	 <option value="Realme">Realme</option>	
	   	 <option value="Nokia">Nokia</option>
	   	</select>
	   </div>	 	  	
	   <div class="form-group">
	   	<select class="js-example-basic-single form-control" id="kategori" name="kategori">
	   	 <option value="">Kategori</option>
	   	 <option value="Laptop">Laptop</option>
	   	 <option value="Laptop Gaming">Laptop Gaming</option>	
	   	 <option value="Notebook">Notebook</option>
	   	 <option value="PC">PC</option>
	   	 <option value="Kamera">Kamera</option>
	   	 <option value="Smartphone">Smartphone</option>
	   	</select>
	   </div>
	   <div class="form-group">
	   	<input type="text" class="form-control" name="stok" placeholder="Stok">
	   </div>
	   <div class="form-group">
	   	<input type="file" class="" placeholder="" class="form-control" name="image">
	   </div>
	   <button class="btn btn-primary " name="tambah" type="submit" id="btn-tambah">Tambah</button>
	   <a href="index.php" class="btn btn-danger">Batal</a>
	  </form>
   </div>	
 </div>
</div>

<style type="text/css">
	form .form-group .form-control{
		height: 45px;
	}
</style>