<?php
include('../db1_connection.php');

function getAllUsers(){
	global $conn;
	 $sql = "SELECT * FROM `data`";
	 
     $query = mysqli_query($conn, $sql);
     if (mysqli_num_rows($query) > 0) {
     	$data=mysqli_fetch_all($query,MYSQLI_ASSOC);
     	return $data;
     }else{
     	return false;
     }

}

//-----------for the pagigation table--------//

function getAllUsers2($start = 0, $limit = 10) {
    global $conn; // Use the global database connection
    
    // Modify the query to include LIMIT and OFFSET for pagination
    $query = "SELECT * FROM data LIMIT $start, $limit";
    
    // Fetch the data from the database
    $result = mysqli_query($conn, $query);
    
    // Fetch the data as an associative array
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    return $users;
}



function getAllCategories2($start = 0, $limit = 10) {
    global $conn;
    $query = "SELECT * FROM catagory ORDER BY id DESC LIMIT $start, $limit";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return [];
    }
}

function countCategories2() {
    global $conn;
    $query = "SELECT COUNT(*) AS total FROM catagory";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['total'];
}




function getAllProducts2($start = 0, $limit = 10) {
    global $conn;
    $query = "SELECT * FROM products ORDER BY p_id DESC LIMIT $start, $limit";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return [];
    }
}

function countProducts2() {
    global $conn;
    $query = "SELECT COUNT(*) AS total FROM products";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['total'];
}



function getSliders2($start = 0, $limit = 10) {
    global $conn;
    $query = "SELECT * FROM slider ORDER BY id DESC LIMIT $start, $limit";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return [];
    }
}

function countSliders2() {
    global $conn;
    $query = "SELECT COUNT(*) AS total FROM slider";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['total'];
}


//------------------end of the pagigation table----------//

function userDelete($user_id){
	global $conn;
	 $sql = "DELETE FROM `data` WHERE id='".$user_id."'";
     $query = mysqli_query($conn, $sql);
     if ($query) {
     	return true;
     }else{
     	return false;
     }
}


function getuserdetails($user_id){
	global $conn;
	 $sql = "SELECT * FROM `data` WHERE id='".$user_id."'";
     $query = mysqli_query($conn, $sql);

     if (mysqli_num_rows($query)) {
		$data=mysqli_fetch_assoc($query);
     	return $data;
     }else{
     	return false;
     }
}

// function userupdate($user_id,$name,$email){
// 	global $conn;
// 	 $sql = "UPDATE `data` set id='".$user_id."',name='".$name."',email='".$email."'";
//      $query = mysqli_query($conn, $sql);

//     return $query?true:false;
    
// }




// Example function in admin_function.php
// function getAllProducts($start, $limit) {
//     global $conn;
//     $sql = "SELECT * FROM products LIMIT $start, $limit";
//     $result = $conn->query($sql);
//     $products = [];
//     if ($result->num_rows > 0) {
//         while ($row = $result->fetch_assoc()) {
//             $products[] = $row;
//         }
//     }
//     return $products;
// }

// function getAllProducts(){
//     global $conn;
//     $sql = "SELECT * FROM products";
//     $query=mysqli_query($conn,$sql);

//     if (mysqli_num_rows($query) > 0) {
//         $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
//         return $data;
//     }else{
//         return false;
//     }
// }

function getAllProducts() {
    global $conn;
    // Modify the query to include ORDER BY for descending order
    $sql = "SELECT * FROM products ORDER BY p_id DESC"; // Replace 'price' with the desired column for sorting
    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
        return $data;
    } else {
        return false;
    }
}


function getproductdetails($product_id) {
    global $conn;

    // Sanitize the product ID to prevent SQL injection
    $product_id = mysqli_real_escape_string($conn, $product_id);

    // Prepare the SQL query
    $sql = "SELECT * FROM `products` WHERE p_id = '$product_id'";
    $query = mysqli_query($conn, $sql);

    // Check if the query executed successfully and returned a result
    if ($query && mysqli_num_rows($query) > 0) {
        return mysqli_fetch_assoc($query);
    } else {
        return false; // Return false if no rows found or query failed
    }
}


function productDelete($p_id){
    global $conn;
	$sql = "DELETE FROM `products` WHERE p_id='".$p_id."'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
    	return true;
    }else{
      	return false;
    }
}

function orderDelete($id){
    global $conn;
	$sql = "DELETE FROM `orders` WHERE id='".$id."'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
    	return true;
    }else{
      	return false;
    }
}

function countProducts() {
    global $conn;
    $sql = "SELECT COUNT(*) as total FROM products";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
    return $data['total'];
}



function getAllSlider(){
    global $conn;
    $sql = "SELECT * FROM slider";
    $query=mysqli_query($conn,$sql);

    if (mysqli_num_rows($query) > 0) {
        $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }else{
        return false;
    }
}
// function sliderDelete($s_id){
//     global $conn;
// 	$sql = "DELETE FROM `slider` WHERE id='".$s_id."'";
//     $query = mysqli_query($conn, $sql);
//     if ($query) {
//     	return true;
//     }else{
//       	return false;
//     }
// }
function sliderDelete($s_id) {
    global $conn;

    // Step 1: Retrieve the image filename from the database
    $query = "SELECT image FROM slider WHERE id = '$s_id'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $imageFile = $row['image'];

        // Step 2: Define the path to the image file
        $targetFilePath = "../slider_images/" . $imageFile;

        // Step 3: Delete the image file from the folder if it exists
        if (file_exists($targetFilePath)) {
            unlink($targetFilePath);
        }

        // Step 4: Delete the record from the database
        $deleteQuery = "DELETE FROM slider WHERE id = '$s_id'";
        $deleteResult = mysqli_query($conn, $deleteQuery);

        // Return true if deletion is successful, otherwise false
        if ($deleteResult) {
            return true;
        } else {
            return false;
        }
    } else {
        return false; // Return false if no record is found
    }
}


function getAllCatagory(){
    global $conn;
    $sql = "SELECT * FROM catagory";
    $query=mysqli_query($conn,$sql);

    if (mysqli_num_rows($query) > 0) {
        $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }else{
        return false;
    }
}

function deleteCategory($categoryId) {
    global $conn;

    // Step 1: Retrieve the image filename from the database
    $query = "SELECT image FROM catagory WHERE id = '$categoryId'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $imageFile = $row['image'];

        // Step 2: Define the path to the image file
        $targetFilePath = "../catagory_images/" . $imageFile;

        // Step 3: Delete the image file from the folder if it exists
        if (file_exists($targetFilePath)) {
            unlink($targetFilePath);
        }

        // Step 4: Delete the category record from the database
        $deleteQuery = "DELETE FROM catagory WHERE id = '$categoryId'";
        $deleteResult = mysqli_query($conn, $deleteQuery);

        // Return true if deletion is successful, otherwise false
        if ($deleteResult) {
            return true;
        } else {
            return false;
        }
    } else {
        return false; // Return false if no record is found
    }
}
function categoryName()
{
    global $conn;
    $sql = "SELECT * FROM catagory WHERE status=1";
    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query)) {
        $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
        return $data;
    } else {
        return false;
    }
}

// Fetch a category by ID
// Fetch a category by ID
// function fetchCategoryById($id) {
//     global $conn;
//     $sql = "SELECT * FROM catagory WHERE id = '$id'";
//     $result = mysqli_query($conn, $sql);
//     return mysqli_fetch_assoc($result);
// }

// // Update an existing category
// function updateCategory($id, $name, $description, $image) {
//     global $conn;
//     $sql = "UPDATE catagory SET name = '$name', description = '$description', image = '$image' WHERE id = '$id'";
//     return mysqli_query($conn, $sql);
// }

function fetchCategoryById($id) {
    global $conn;
    $sql = "SELECT * FROM catagory WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $category = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);
    return $category;
}


function updateCategory($id, $name, $description, $image) {
    global $conn;
    $sql = "UPDATE catagory SET name = ?, description = ?, image = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssi", $name, $description, $image, $id);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}


function fetchSliderById($id) {
    global $conn;
    $sql = "SELECT * FROM slider WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $category = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);
    return $category;
}


function updateSliderImage($id, $image) {
    global $conn;

    $sql = "UPDATE slider SET image = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "si", $image, $id);

    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    return $result;
}


// function fetchProductById($id) {
//     global $conn; 
//     $sql = "SELECT * FROM products WHERE p_id = ?";
//     $stmt = mysqli_prepare($conn, $sql);
//     mysqli_stmt_bind_param($stmt, "i", $id);
//     mysqli_stmt_execute($stmt);
//     $result = mysqli_stmt_get_result($stmt);
//     $category = mysqli_fetch_assoc($result);
//     mysqli_stmt_close($stmt);
//     return $category;
// }

// Fetch product by ID
function fetchProductById($id) {
    global $conn;
    $sql = "SELECT * FROM products WHERE p_id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $product = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);
    return $product;
}

// Fetch all categories
function categoryNameUpdate() {
    global $conn;
    $sql = "SELECT id, name FROM catagory";
    $result = mysqli_query($conn, $sql);
    $categories = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $categories[] = $row;
    }
    return $categories;
}



// function updateProduct($id, $name, $description, $category, $mrp, $discount, $price, $image = null) {
//     global $conn;

//     if ($image) {
//         // Update with image
//         $sql = "UPDATE `products` 
//                 SET `product_name` = '$name', `description` = '$description', `category` = '$category', 
//                     `mrp` = '$mrp', `discount` = '$discount', `price` = '$price', `image` = '$image' 
//                 WHERE `p_id` = '$id'";
//     } else {
//         // Update without image
//         $sql = "UPDATE `products` 
//                 SET `product_name` = '$name', `description` = '$description', `category` = '$category', 
//                     `mrp` = '$mrp', `discount` = '$discount', `price` = '$price' 
//                 WHERE `p_id` = '$id'";
//     }

//     $query = mysqli_query($conn, $sql);

//     return $query ? true : false;
// }

// function updateProduct($id, $name, $description, $category, $mrp, $discount, $price, $salesPackage, $modelNumber, $color, $brand, $image = null) {
//     global $conn;

//     if ($image) {
//         // Update with image
//         $sql = "UPDATE `products` 
//                 SET `product_name` = '$name', `description` = '$description', `c_id` = '$category', 
//                     `mrp` = '$mrp', `discount` = '$discount', `price` = '$price', `sales_package` = '$salesPackage',
//                     `model_number` = '$modelNumber', `color` = '$color', `p_brand` = '$brand', `image` = '$image' 
//                 WHERE `p_id` = '$id'";
//     } else {
//         // Update without image
//         $sql = "UPDATE `products` 
//                 SET `product_name` = '$name', `description` = '$description', `c_id` = '$category', 
//                     `mrp` = '$mrp', `discount` = '$discount', `price` = '$price', `sales_package` = '$salesPackage',
//                     `model_number` = '$modelNumber', `color` = '$color', `p_brand` = '$brand' 
//                 WHERE `p_id` = '$id'";
//     }

//     $query = mysqli_query($conn, $sql);

//     return $query ? true : false;
// }

// function updateProduct($id, $name, $description, $category, $mrp, $discount, $price, $salesPackage, $modelNumber, $color, $brand, $image) {
//     global $conn;

//     if ($image!=null) {
//         // Update with image
//         $sql = "UPDATE `products` 
//                 SET `product_name` = '".$name."', `description` = '$description', `c_id` = '$category', 
//                     `mrp` = '$mrp', `discount` = '$discount', `price` = '$price', `sales_package` = '$salesPackage',
//                     `model_number` = '$modelNumber', `color` = '$color', `p_brand` = '$brand', `image` = '$image' 
//                 WHERE `p_id` = '$id'";
//     } else {
//         // Update without image
//         $sql = "UPDATE `products` 
//                 SET `product_name` = '".$name."', `description` = '$description', `c_id` = '$category', 
//                     `mrp` = '$mrp', `discount` = '$discount', `price` = '$price', `sales_package` = '$salesPackage',
//                     `model_number` = '$modelNumber', `color` = '$color', `p_brand` = '$brand' 
//                 WHERE `p_id` = '$id'";
//     }

//     $query = mysqli_query($conn, $sql);

//     return $query ? true : false;
// }


// function productupdate($product_id, $name, $description, $category, $discount, $price, $salesPackage, $modelNumber, $color, $brand,$image) {
//     global $conn;
//     $sql = "UPDATE products SET product_name='" . $name . "', description='" . $description . "', c_id='" . $category . "', discount='" . $discount . "',price='" . $price . "', sales_package='" . $salesPackage . "', model_number='" . $modelNumber . "', color='" . $color . "', p_brand='" . $brand . "',image='".$image."' WHERE p_id='" . $product_id . "'";

//     $query = mysqli_query($conn, $sql);

//     return $query ? true : false;
// }

//working but not including catagory
// function productupdate($product_id, $name, $description, $category, $discount, $price, $salesPackage, $modelNumber, $color, $brand, $image) {
//     global $conn;
//     $sql = "UPDATE products SET 
//                 product_name='" . mysqli_real_escape_string($conn, $name) . "', 
//                 description='" . mysqli_real_escape_string($conn, $description) . "', 
//                 c_id='" . mysqli_real_escape_string($conn, $category) . "', 
//                 discount='" . mysqli_real_escape_string($conn, $discount) . "', 
//                 price='" . mysqli_real_escape_string($conn, $price) . "', 
//                 sales_package='" . mysqli_real_escape_string($conn, $salesPackage) . "', 
//                 model_number='" . mysqli_real_escape_string($conn, $modelNumber) . "', 
//                 color='" . mysqli_real_escape_string($conn, $color) . "', 
//                 p_brand='" . mysqli_real_escape_string($conn, $brand) . "', 
//                 image='" . mysqli_real_escape_string($conn, $image) . "' 
//             WHERE p_id='" . mysqli_real_escape_string($conn, $product_id) . "'";

//     if (!mysqli_query($conn, $sql)) {
//         die("Error updating product: " . mysqli_error($conn) . "\nQuery: " . $sql);
//     }

//     return true;
// }

function productupdate($product_id, $name, $description, $category, $discount, $price, $salesPackage, $modelNumber, $color, $brand, $image) {
    global $conn;

    $sql = "UPDATE products SET 
                product_name = ?, 
                description = ?, 
                c_id = ?, 
                discount = ?, 
                price = ?, 
                sales_package = ?, 
                model_number = ?, 
                color = ?, 
                p_brand = ?, 
                image = ? 
            WHERE p_id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "ssiddsssssi", 
        $name, 
        $description, 
        $category, 
        $discount, 
        $price, 
        $salesPackage, 
        $modelNumber, 
        $color, 
        $brand, 
        $image, 
        $product_id
    );

    return $stmt->execute();
}


function getAllFeatureProduct(){
    global $conn;
    $sql = "SELECT * FROM featured_products";
    $query=mysqli_query($conn,$sql);

    if (mysqli_num_rows($query) > 0) {
        $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }else{
        return false;
    }
}


// function DisplayOrder(){
// 	global $conn;
// 	// $uid=$_SESSION['uid'];
// 	$sql = "SELECT orders.p_id,orders.address_id,orders.payment_method,orders.delevery_date,orders.order_date,products.product_name,products.description,products.mrp,products.discount,products.price,products.image FROM orders JOIN products ON orders.p_id=products.p_id";
//     $query = mysqli_query($conn, $sql);
// 	if (mysqli_num_rows($query) > 0) {
// 		$data=mysqli_fetch_all($query,MYSQLI_ASSOC);
// 		return $data;
// 	}else{
// 		return false;
// 	}
// }

function DisplayOrder(){
    global $conn;
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
    products.mrp,
    products.discount,
    products.price,
    products.image,
    address.address,
    address.city,
    address.state,
    address.pin
FROM 
    orders
JOIN 
    products ON orders.p_id = products.p_id
JOIN 
    address ON orders.user_id = address.user_id
GROUP BY 
    orders.id
ORDER BY 
    orders.id DESC";
    
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
        return $data;
    } else {
        return false;
    }
}

?>