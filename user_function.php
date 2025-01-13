<?php

//use function PHPSTORM_META\elementType;

include('db1_connection.php');

function getAllProducts(){
    global $conn;
    //$sql="SELECT * FROM products";
    $sql = "SELECT * FROM products WHERE active='1' ORDER BY p_id DESC LIMIT 8 OFFSET 0";
    //$sql = "SELECT * FROM (SELECT * FROM products ORDER BY p_id ASC LIMIT 6) AS last_6_rows ORDER BY p_id DESC";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0){
        $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }
    else{
        return false;
    }
}

function getorderProducts($pid){
    global $conn;
    //$sql="SELECT * FROM products";
    $sql = "SELECT * FROM products WHERE p_id='".$pid."'";
    //$sql = "SELECT * FROM (SELECT * FROM products ORDER BY p_id ASC LIMIT 6) AS last_6_rows ORDER BY p_id DESC";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0){
        $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }
    else{
        return false;
    }
}

function getAllProductsc($pid){
    global $conn;
    //$sql="SELECT * FROM products";
    $sql = "SELECT * FROM products WHERE c_id='".$pid."' AND active='1'";
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
// function displayCart1() {
//     if (count($_SESSION['cart']) === 0) {
//     } else {
//         foreach ($_SESSION['cart'] as $index => $item) {
//             echo ($index + 1) . ". " . $item . "<br>";
//         }
//         echo "Total items in cart: " . count($_SESSION['cart']);
//     }
// }


function getAllFeatureProduct(){
    global $conn;
    //$sql="SELECT * FROM products";
    $sql = "SELECT * FROM products WHERE active='1' ORDER BY p_id DESC LIMIT 8 OFFSET 8";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0){
        $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }
    else{
        return false;
    }
}

function getAllTrendingProduct(){
    global $conn;
    //$sql="SELECT * FROM products";
    $sql = "SELECT * FROM products WHERE active='1' ORDER BY p_id DESC LIMIT 8 OFFSET 16";
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
    //$sql="SELECT * FROM products";
    $sql = "SELECT * FROM products WHERE active='1' ORDER BY p_id DESC";
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
//Top Catagory
 function getCatagory(){
     global $conn;
     $sql="SELECT * FROM catagory WHERE active='1'";
     $query=mysqli_query($conn,$sql);
     if(mysqli_num_rows($query)>0){
         $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
         return $data;
     }
     else{
         return false;
    }
 }
//End of Top Catagory

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

function CheckProductInCart($u_id, $p_id) {
    global $conn; // Assuming you have a database connection available
    $query = "SELECT * FROM cart WHERE u_id = ? AND p_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ii", $u_id, $p_id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->num_rows > 0;
}


function cartRemove($cart_id){
    global $conn;
	$sql = "DELETE FROM `cart` WHERE id='".$cart_id."'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
    	return true;
    }else{
      	return false;
    }
}

function getcartnum(){
    if(isset($_SESSION['username'])){
         global $conn;
         $uid=$_SESSION['id'];
         $max="SELECT p_id FROM cart WHERE u_id='".$uid."'";
         if($result=mysqli_query($conn,$max)){
             $row=mysqli_num_rows($result);
             return $row;
         }
    }
}




function displaywishlist(){
    global $conn;
    $uid=$_SESSION['id'];
    $sql="SELECT products.*,products.product_name,wishlist.id FROM products JOIN wishlist ON products.p_id=wishlist.p_id WHERE u_id='".$uid."' ORDER BY wishlist.id DESC";
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


function InsertWishlistProduct($uid,$pid){
    global $conn;
    $sql="INSERT INTO wishlist(u_id,p_id) VALUES ('".$uid."','".$pid."')";
    $query=mysqli_query($conn,$sql);
    if($query){
        return $query;
    }
    else{
        return false;
    }
}

function CheckProductInWishlist($u_id, $p_id) {
    global $conn; // Assuming you have a database connection available
    $query = "SELECT * FROM wishlist WHERE u_id = ? AND p_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ii", $u_id, $p_id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->num_rows > 0;
}


function wishlistRemove($wishlist_id){
    global $conn;
	$sql = "DELETE FROM `wishlist` WHERE id='".$wishlist_id."'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
    	return true;
    }else{
      	return false;
    }
}


function getwishlistnum(){
    if(isset($_SESSION['username'])){
         global $conn;
         $uid=$_SESSION['id'];
         $max="SELECT p_id FROM wishlist WHERE u_id='".$uid."'";
         if($result=mysqli_query($conn,$max)){
             $row=mysqli_num_rows($result);
             return $row;
         }
    }
}
// function getcartnum() {
//     if (isset($_SESSION['username'])) { // Check if the user is logged in
//         global $conn; // Access the global database connection
//         $uid = $_SESSION['id']; // Retrieve the user's ID from the session
        
//         // SQL query to count rows in the cart table for the specific user
//         $query = "SELECT COUNT(*) AS total FROM cart WHERE u_id = '$uid'";
        
//         // Execute the query
//         $result = mysqli_query($conn, $query);
        
//         if ($result) {
//             // Fetch the result as an associative array
//             $data = mysqli_fetch_assoc($result);
            
//             // Return the count value
//             return $data['total'];
//         }
//     }
    
//     // Return 0 if the user is not logged in or the query fails
//     return 0;
// }



//------------------- Search bar------------------------//

// function getAllSearchProducts($searchTerm = '') {
//     global $conn; // Use the global database connection

//     $sql = "SELECT * FROM products";
//     if (!empty($searchTerm)) {
//         $sql .= " WHERE product_name LIKE ? OR category LIKE ?";
//     }

//     $stmt = $conn->prepare($sql);
//     if (!empty($searchTerm)) {
//         $searchKeyword = '%' . $searchTerm . '%';
//         $stmt->bind_param("ss", $searchKeyword, $searchKeyword);
//     }
//     $stmt->execute();
//     $result = $stmt->get_result();

//     // Fetch and return results as an associative array
//     return $result->fetch_all(MYSQLI_ASSOC);
// }


// function getAllSearchProducts($searchTerm = '') {
//     global $conn; // Use the global database connection

//     // SQL query to fetch only necessary data from products and categories
//     $sql = "
//         SELECT 
//             p.p_id AS product_id,      -- Product ID
//             p.product_name,            -- Product Name
//             c.name AS catagory_name    -- Category Name
//         FROM 
//             products p
//         LEFT JOIN 
//             catagory c ON p.c_id = c.id -- Join catagory table on category ID
//         LEFT JOIN 
//             cart ct ON p.p_id = ct.p_id -- Join cart table on product ID
//     ";

//     // Add search filters for product name or category name
//     if (!empty($searchTerm)) {
//         $sql .= " WHERE p.product_name LIKE ? OR c.name LIKE ?";
//     }

//     $stmt = $conn->prepare($sql);

//     // Bind parameters if a search term is provided
//     if (!empty($searchTerm)) {
//         $searchKeyword = '%' . $searchTerm . '%';
//         $stmt->bind_param("ss", $searchKeyword, $searchKeyword);
//     }

//     $stmt->execute();
//     $result = $stmt->get_result();

//     // Fetch and return results as an associative array
//     return $result->fetch_all(MYSQLI_ASSOC);
// }



// function getAllSearchProducts($searchTerm = '') {
//     global $conn; // Use the global database connection

//     // SQL query to fetch data from products and categories
//     $sql = "
//         SELECT 
//             p.p_id AS product_id,      -- Product ID
//             p.product_name,            -- Product Name
//             c.name AS catagory_name,   -- Category Name
//             p.price,                   -- Price of the product
//             p.mrp,                     -- MRP (Maximum Retail Price)
//             p.discount,                -- Discount percentage
//             p.image                    -- Product image
//         FROM 
//             products p
//         LEFT JOIN 
//             catagory c ON p.c_id = c.id -- Join category table on category ID
//     ";

//     // Add search filters for product name or category name
//     if (!empty($searchTerm)) {
//         $sql .= " WHERE p.product_name LIKE ? OR c.name LIKE ? AND p.active='1'";
//     }

//     $stmt = $conn->prepare($sql);

//     // Bind parameters if a search term is provided
//     if (!empty($searchTerm)) {
//         $searchKeyword = '%' . $searchTerm . '%';
//         $stmt->bind_param("ss", $searchKeyword, $searchKeyword);
//     }

//     $stmt->execute();
//     $result = $stmt->get_result();

//     // Fetch and return results as an associative array
//     return $result->fetch_all(MYSQLI_ASSOC);
// }



function getAllSearchProducts($searchTerm = '') {
    global $conn; // Use the global database connection

    // SQL query to fetch data from products and categories
    $sql = "
        SELECT 
            p.p_id AS product_id,      -- Product ID
            p.product_name,            -- Product Name
            c.name AS catagory_name,   -- Category Name
            p.price,                   -- Price of the product
            p.mrp,                     -- MRP (Maximum Retail Price)
            p.discount,                -- Discount percentage
            p.image                    -- Product image
        FROM 
            products p
        LEFT JOIN 
            catagory c ON p.c_id = c.id -- Join category table on category ID
    ";

    // Add search filters for product name or category name
    if (!empty($searchTerm)) {
        $sql .= " WHERE (p.product_name LIKE ? OR c.name LIKE ?) AND p.active = '1'";
    }

    $stmt = $conn->prepare($sql);

    // Bind parameters if a search term is provided
    if (!empty($searchTerm)) {
        $searchKeyword = '%' . $searchTerm . '%';
        $stmt->bind_param("ss", $searchKeyword, $searchKeyword);
    }

    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch and return results as an associative array
    return $result->fetch_all(MYSQLI_ASSOC);
}

//--------------- End of Search bar--------------------//


// function fetchUserAddress($uid){
//     global $conn;
//     $sql = "SELECT data.name,data.email,address.address,address,pin FROM address JOIN data ON address.user_id=data.id WHERE address.user_id='".$uid."'";
//     $query = mysqli_query($conn, $sql);
//     $count = mysqli_num_rows($query);
//     if($count){
//         $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
//         return $data;
//     }
//     else{
//         return false;
//     }
// }
function addressRemove($address_id){
    global $conn;
	$sql = "DELETE FROM `address` WHERE id='".$address_id."'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
    	return true;
    }else{
      	return false;
    }
}

function fetchUserAddress($uid) {
    global $conn;
    $sql = "SELECT data.name, data.email, address.address,address.id , address.pin,address.state 
            FROM address 
            JOIN data ON address.user_id = data.id 
            WHERE address.user_id = '".$uid."'";

    $query = mysqli_query($conn, $sql);

    if ($query && mysqli_num_rows($query) > 0) {
        return mysqli_fetch_all($query, MYSQLI_ASSOC);
    } else {
        return false; // Return false if no addresses are found
    }
}


function DisplayUserOrder($uid){
	global $conn;
	//$sql = "SELECT orders.p_id,orders.address_id,orders.payment_method,orders.delevery_date,orders.order_date,products.product_name,products.description,products.price,products.image FROM orders JOIN products ON orders.p_id=products.p_id WHERE orders.user_id='".$uid."'";
    //$sql = "SELECT orders.p_id, orders.address_id, orders.payment_method, orders.delevery_date, orders.order_date, orders.status, products.product_name, products.description, products.price, products.image 
            // FROM orders 
            // JOIN products ON orders.p_id = products.p_id 
            // WHERE orders.user_id = '".$uid."'";

            $sql = "SELECT 
            orders.id,
            orders.p_id, 
            orders.address_id, 
            orders.payment_method, 
            orders.delevery_date, 
            orders.order_date, 
            orders.status, 
            products.product_name, 
            products.description, 
            products.price, 
            products.image, 
            address.address, 
            address.city, 
            address.state, 
            address.pin
        FROM orders 
        JOIN products ON orders.p_id = products.p_id 
        JOIN address ON orders.address_id = address.id
        WHERE orders.user_id = '".$uid."'
        ORDER BY orders.order_date DESC";
    $query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0) {
		$data=mysqli_fetch_all($query,MYSQLI_ASSOC);
		return $data;
	}else{
		return false;
	}
}



function fetchCartRec($uid){

    
    global $conn;
    $sql = "SELECT cart.*,products.* FROM cart JOIN products ON cart.p_id=products.p_id WHERE u_id='".$uid."'";
    $query = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($query);
    if($count){
        $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }
    else{
        return false;
    }
}
?>