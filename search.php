<?php
session_start();

include 'header.php';
include 'koneksi.php';
?>

<div class="rc-search pt-3 pb-3 bg-white">
 <div class="container col-md-11">
  <ol class="breadcrumb pl-0 m-0">
   <li class="breadcrumb-item"><a href="index.php">Home</a></li>
   <li class="breadcrumb-item">Search</li>
   <li class="breadcrumb-item active"></li>		
  </ol>
  <hr class="mt-0">
  <div class="row">
  	<div class="col-md-3">
  	 <div class="accordion" id="accordionExample">
	 	<div class="card" id="result">
	 	 <?php
	 	 	
	 	 	$sql = "SELECT DISTINCT kategori FROM produk ORDER BY kategori";
	 	 	$result = $koneksi->query($sql);
	 	 ?>	
	      <div class="card-header  bg-white" id="">
			      <a class="" type="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		          Kategori <span class="float-right"><i class="pe-7s-angle-down"></i></span>
		      </a>
		    
	      </div>
	      <div id="collapseOne" class="collapse show" aria-labelledby="" data-parent="#accordionExample">
	        <div class="card-body">
        	<?php
         		foreach($result as $kategori):
         	?>	
	         <p href=""><input type="checkbox" value="<?= $kategori['kategori'];?>" id="kategori" name=""> <span class="produk_check pl-2"><?= $kategori['kategori'];?></span></p>
	         <?php
	         	endforeach;
	         ?>
	      	</div>
	      </div>
	    </div>
	    <div class="card" id="result">
    	 <?php
		 	$sql = "SELECT DISTINCT merek FROM produk ORDER BY merek";
		 	$result = $koneksi->query($sql);
		 ?>
	      <div class="card-header bg-white" id="">
		          <a class="" type="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
	          merek <span class="float-right"><i class="pe-7s-angle-down"></i></span>
	          </a>
	        
	      </div>
	      <div id="collapseTwo" class="collapse" aria-labelledby="" data-parent="#accordionExample">
	        <div class="card-body">
	        <?php
         		foreach($result as $merek):
         	?>	
	         <p href=""><input type="checkbox" name="" value="<?= $merek[merk];?>" id="merek"> <span class="produk_check pl-2"><?= $merek[merk];?></span></p>
	         <?php
	         	endforeach;
	         ?>
	        </div>
	      </div>
	    </div>
	    <div class="card" id="rating">
	      <div class="card-header  bg-white" id="">
		    <a class="" type="" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
	          Rating <span class="float-right"><i class="pe-7s-angle-down"></i></span>
	        </a> 
	      </div>
	      <div id="collapseThree" class="collapse" aria-labelledby="" data-parent="#accordionExample">
	        <div class="card-body">
	        <?php
	          for($i=1; $i<=5;$i++){?>
	          <input type="checkbox" name="">
	        	<?php 
        		 for($j=5; $j>=$i; $j--){?>
        		 <i class="pe-7s-star"></i>	
        		 <?php } 		
        		 echo "</br>";
	          }
	        ?>	

	        </div>
	      </div>
	    </div>
	    
	  </div>
  	</div>
  	<div class="col-md-9">
	
  	 <div class="rc-search-result pt-2">
  	    <p>Hasil pencarian</p><hr>	
  	    <div class="row">
  	      <?php
  	     	$search = $_GET['search'];
			$sql = "SELECT * FROM produk WHERE nama LIKE '$search%' ORDER BY id_produk DESC";
			$result_search = mysqli_query($koneksi,$sql);
			$row = mysqli_num_rows($result_search);	
  	      	foreach($result_search as $result):
  	      ?>	
  	      <div class="col-md-3 mb-2">
  	      	<div class="card p-2">
  	      	  <div class="card-body">
  	      	  	<img src="assets/img/produk/<?= $result[gambar];?>" class="card-img" width="100%" height="160">
  	      	  	<p class="card-text" id="nama"><?= $result['nama'];?></p>
  	      	  	<div class="d-flex">
  	      	  	  <button class="btn btn-addcart w-50 text-white" name="addcart"><i class="pe-7s-cart"></i></button>
  	      	  	  <input type="hidden" name="">
  	      	  	  <button class="btn btn-wishlist w-50 text-white" name="addwishlist"><i class="pe-7s-like"></i></button><input type="hidden" name="">
  	      	  	</div>
  	      	  </div>	
  	      	</div>
  	      </div>
  	      <?php
  	      	endforeach;
  	      ?>	

  	      <?php
			if(isset($_POST['action'])){
				if(isset($_POST['kategori'])){
					$kategori = implode("','", $_POST['kategori']);
					$sql .="AND kategori IN(".$kategori.")";
				}
				if(isset($_POST[merk])){
					$merek = implode("','", $_POST[merk]);
					$sql .="AND merek IN(".$merek.")";
				}

				echo$result = mysqli_query($koneksi,$sql);
				$output = '';
				if(mysqli_num_rows($result)> 0){
					while($data = mysqli_fetch_assoc($result)){
						$output.= '<div class="col-md-3 mb-2">
			  	      	<div class="card p-2">
			  	      	  <div class="card-body">
			  	      	  	<img src="assets/img/produk/"'.$data[gambar].'" class="" width="100%" height="150">
			  	      	  	<p class="card-text" id="nama">'.$data['nama'].'</p>
			  	      	  	<div class="d-flex">
			  	      	  	  <button class="btn btn-addcart w-50 text-white" name="addcart"><i class="ti-shopping-cart"></i></button>
			  	      	  	  <input type="hidden" name="">
			  	      	  	  <button class="btn btn-wishlist w-50 text-white" name="addwishlist"><i class="ti-heart"></i></button><input type="hidden" name="">
			  	      	  	</div>
			  	      	  </div>	
			  	      	</div>
			  	      </div>';
					}
				}
				else{
					$output = "<p> Produk tidak ada </p>";
				}
			}

		  ?>
  	    </div>
  	 </div>	
  	</div>
  </div>	
 </div>	
</div>
<?php
include 'footer.php';
?>

<style type="text/css">
.rc-search .container .breadcrumb{
	background: rgba(0,0,0,0);
}
.rc-search .container .breadcrumb a{
	text-decoration: none;
	color: #C066FF;
}
.rc-search .container .breadcrumb .breadcrumb-item.active{
	text-transform: capitalize;
}
.rc-search .container .row .col-md-3 .accordion #rating .pe-7s-star{
	color: #EDED3E;
} 	
.rc-search .container .row .col-md-3 .accordion .card{
	border-color: #eee;
}
.rc-search .container .row .col-md-3 .accordion .card .card-header{
	border-bottom: 1px solid #eee;
}
.rc-search .container .row .col-md-9 .rc-search-result .card:hover{
	box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 6px 0px;
	cursor: pointer;
}.rc-search .container .row .col-md-9 .rc-search-result .card .card-body .card-img{

}
.rc-search .container .row .col-md-9 .rc-search-result .card .card-body #nama{
	font-size: 16px;
	display: block;
    display: -webkit-box;
    max-height: 42px;
    min-height: 42px;
    font-size: 14px;
    line-height: 1.5;
    -webkit-line-clamp: 2;
    color: #000;
   /*-webkit-box-orient: vertical; */
    overflow: hidden;
    text-overflow: ellipsis;
    padding: 0;
    white-space: normal;
    margin: 0 0 4px;
}

.rc-search .container .row .col-md-9 .rc-search-result .card .card-body .btn-addcart{
	background-image: linear-gradient(180deg, #C066FF,#A162F5);
	font-size: 14px;
	margin-right: 5px;
}
.rc-search .container .row .col-md-9 .rc-search-result .card .card-body .btn-wishlist{
	background-image: linear-gradient(180deg, #ED3E3E, #FF3030);
	margin-left: 5px;
}
</style>