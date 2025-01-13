<?php
include('user_function.php');

$cart_id=$_REQUEST['id']; 

$call=cartRemove($cart_id);
// die();
if($call){
	echo "<script>
			alert('Cart Delete Successful.');
			window.location.href='cart.php';
		  </script>";
}else{
	echo "<script>
			alert('Cart Delete Unuccessful.');
			window.location.href='cart.php';
		  </script>";
}


?>