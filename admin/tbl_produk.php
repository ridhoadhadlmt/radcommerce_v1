<?php
  $sql = mysqli_query($koneksi,"SELECT * FROM produk ORDER BY id_produk ASC");
?>
<div class="container-fluid mt-3" id="main-admin">
  <div class="row">
   <div class="col-md-6">
     <div class="breadcrumb pl-0" style="background: transparent;">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Tabel Produk</li>  
   </div>
   </div>
   <div class="col-md-6">
     <div class="btn-action float-right">
       <button class="btn btn-print"><i class="ti-printer"></i> Print</button>
       <button class="btn btn-edit"><i class="ti-marker-alt"></i> Edit</button>
       <button class="btn btn-hapus"><i class="ti-trash"></i> Hapus</button>
     </div> 
   </div>  
  </div>
 <div class="card mb-3" id="table-produk">
  <div class="card-body">
   <table class="table table-striped table-hover" id="example">
      <thead>
        <tr>
          <th>#</th>
          <th>No</th>
          <th>Nama Produk</th>
          <th>Harga</th>
          <th>merek</th>
          <th>Kategori</th>
          <th>Stok</th>
          <!-- <th>Aksi</th> -->
        </tr>
      </thead>
      <tbody>
      <?php
      $i = 1;
      foreach($sql as $produk):
      ?>
        <tr>
          <td><input type="checkbox" name=""></td>
          <td><?= $produk['id_produk'];?></td>
          <td><?= $produk['namaproduk'];?></td>
          <td><?= $produk['harga'];?></td>
          <td><?= $produk[merk];?></td>
          <td><?= $produk['kategori'];?></td>
          <td><?= $produk['stok'];?></td>
          <!-- <td>
            <a href="index.php?q=edit_produk&id_produk=<?= $produk['id_produk'];?>" class="btn btn-success">Edit</a>
            <a href="delete_produk.php?id_produk=<?= $produk['id_produk'];?>" class="btn btn-danger">Hapus</a>
          </td> -->
        </tr>
        <?php
        $i++;
      endforeach;
        ?>
      </tbody>
    </table> 
  </div> 
 </div>	
</div>


<style type="text/css">
  #main-admin .row .col-md-6 .btn-action .btn-print{
    background-image: linear-gradient(180deg, #FFA061, #FF944D);
    color: #FFF;
  }
  #main-admin .row .col-md-6 .btn-action .btn-edit{
    background-image: linear-gradient(180deg, #66CC66, #7CCC7C);
    color: #FFF;
  }
  #main-admin .row .col-md-6 .btn-action .btn-hapus{
    background-image: linear-gradient(180deg, #FF0000, #CC1F1F);
    color: #FFF;
  }
</style>
