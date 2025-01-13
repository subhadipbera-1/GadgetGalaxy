<?php
include('user_function.php');

$wishlist_id=$_REQUEST['id']; 

$call=wishlistRemove($wishlist_id);
// die();
if($call){
	echo "<script>
			alert('Wishlist Delete Successful.');
			window.location.href='wishlist.php';
		  </script>";
}else{
	echo "<script>
			alert('Wishlist Delete Unuccessful.');
			window.location.href='wishlist.php';
		  </script>";
}


?>