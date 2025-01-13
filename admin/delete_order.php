<?php
include('admin_function.php');

$product_id=$_REQUEST['id']; 

$call=orderDelete($product_id);
// die();
if($call){
	echo "<script>
			alert('Order Delete Successful.');
			window.location.href='all_order.php';
		  </script>";
}else{
	echo "<script>
			alert('Order Delete Unuccessful.');
			window.location.href='all_order.php';
		  </script>";
}


?>