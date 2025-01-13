<?php
include('admin_function.php');

$product_id=$_REQUEST['id']; 

$call=productDelete($product_id);
// die();
if($call){
	echo "<script>
			alert('Product Delete Successful.');
			window.location.href='all_product.php';
		  </script>";
}else{
	echo "<script>
			alert('Product Delete Unuccessful.');
			window.location.href='all_product.php';
		  </script>";
}


?>