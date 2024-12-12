<?php
function createProduct($table,$field,$value){
	global $koneksi;

	$fieldCreate = implode(",", $field);
	$valueCreate = implode(",", $value);

	$sql = "INSERT INTO ".$table."(".$fieldCreate.") VALUES (".$valueCreate.") ";
	$result = mysqli_query($koneksi,$sql);

	if($result){
		echo "<script>Swal.fire('Berhasil')</script>";	
	}
	else{
		header('location:index.php?q=add_produk');
	}
}	


function deleteProduk($table,$kondisi=''){
	global $koneksi;

	$sql = "DELETE FROM $table $kondisi";
	$result = mysqli_query($koneksi,$sql);
	if($result){
		header('location:index.php?q=show_produk');
	}
	else{
		header('location:index.php?q=show_produk?pesan=gagal');
	}
}

?>