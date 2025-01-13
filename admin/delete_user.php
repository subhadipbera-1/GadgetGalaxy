<?php
include('admin_function.php');

$slider_id=$_REQUEST['uid']; 

$call=userDelete($slider_id);
// die();
if($call){
	echo "<script>
			alert('Slider Delete Successful.');
			window.location.href='user.php';
		  </script>";
}else{
	echo "<script>
			alert('Slider Delete Unuccessful.');
			window.location.href='user.php';
		  </script>";
}


?>