<?php

//use function PHPSTORM_META\elementType;

include('db1_connection.php');

function getAllProducts(){
    global $conn;
    $sql="SELECT * FROM products";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0){
        $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }
    else{
        return false;
    }
}

function getproductid($product_id){
    global $conn;
    $sql="SELECT * FROM `products` WHERE p_id='".$product_id."'";
    $query=mysqli_query($conn,$sql);

    if(mysqli_num_rows($query)){
        $data=mysqli_fetch_assoc($query);
        return $data;
    }
    else{
        return false;
    }
}


function Displayproduct($pid){
	global $conn;
	 $sql = "SELECT * FROM products WHERE p_id='".$pid."'";
     $query = mysqli_query($conn, $sql);

	 if (mysqli_num_rows($query) > 0) {
		$data=mysqli_fetch_all($query,MYSQLI_ASSOC);
		return $data;
	}
    else{
        return false;
    }
}


function getAllFeatureProduct(){
    global $conn;
    $sql="SELECT * FROM featured_products";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0){
        $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }
    else{
        return false;
    }
}




function getAllSlider(){
    global $conn;
    $sql="SELECT * FROM slider";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0){
        $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }
    else{
        return false;
    }
}

function getAllCatagory(){
    global $conn;
    $sql="SELECT * FROM catagory";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0){
        $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }
    else{
        return false;
    }
}


function displaycart(){
    global $conn;
    $uid=$_SESSION['id'];
    $sql="SELECT products.*,products.product_name,cart.id FROM products JOIN cart ON products.p_id=cart.p_id WHERE u_id='".$uid."'";
    $query=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($query);
    if($count){
        $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }
    else{
        return false;
    }
}
function InsertCartProduct($uid,$pid){
    global $conn;
    $sql="INSERT INTO cart(u_id,p_id) VALUES ('".$uid."','".$pid."')";
    $query=mysqli_query($conn,$sql);
    if($query){
        return $query;
    }
    else{
        return false;
    }
}




?>