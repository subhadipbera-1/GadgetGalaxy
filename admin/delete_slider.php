<?php
include('admin_function.php');

$slider_id=$_REQUEST['id']; 

$call=sliderDelete($slider_id);
// die();
if($call){
	echo "<script>
			alert('Slider Delete Successful.');
			window.location.href='all_slider.php';
		  </script>";
}else{
	echo "<script>
			alert('Slider Delete Unuccessful.');
			window.location.href='all_slider.php';
		  </script>";
}


?>