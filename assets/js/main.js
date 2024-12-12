$(document).ready(function(){
 $("#example").DataTable();
  });
  $("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});

$('.js-example-basic-single').select2({
});
    

$('.produk_check').click(function(){
 var action = 'data';

 var kategori = get_filter_data('kategori');
 var merek = get_filter_data(merk);

 $.ajax({
 	url : 'search.php',
 	method : 'POST',
 	data :{action,kategori:kategori,merek:merek},
 	success:function(response){
 	  $('#result').html(response);
 	}
 })
});

function get_filter_data(text_id){
	var filterData = [];
	$('#' + text_id +':checked').each(function(){
		filterData.push($(this).val());
	});
	return filterData;
}
