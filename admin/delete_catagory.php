<?php
include('admin_function.php');

$catagory_id=$_REQUEST['id']; 

$call=deleteCategory($catagory_id);
//die();
if($call){
	echo "<script>
			alert('Catagory Delete Successful.');
			window.location.href='catagory.php';
		  </script>";
}else{
	echo "<script>
			alert('Catagory Delete Unuccessful.');
			window.location.href='catagory.php';
		  </script>";
}


?>