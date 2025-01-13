<?php
include('user_function.php');

$cart_id=$_REQUEST['id']; 

$call=addressRemove($cart_id);
// die();
if($call){
	echo "<script>
			alert('Address Remove Successful.');
			window.location.href='checkout.php';
		  </script>";
}else{
	echo "<script>
			alert('Address Remove Unuccessful.');
			window.location.href='checkout.php';
		  </script>";
}


?>