<?php
include('headerlink.php');
include('header.php');
?>

    <!---- End of Navbar ---->
    <div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
        </ol>
    </nav>
</div>



  <div class="container mt-5">
    <h2>My Wishlist</h2>
    <div class="row mt-4">
        <div class="col-12" style="padding-bottom: 39px;">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>Image</th>
                            <th>Product</th>
                            <th>Price</th>
                            <!-- <th>Stock Status</th> -->
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                        $alldata=displaywishlist();
                        if(!empty($alldata)){
                          foreach($alldata as $data){
                        
                      ?>
                        <tr> 
                            <td>
                                <a href="productDetails.php?productid=<?php echo $data['p_id']; ?>">
                                <img src="product_images/<?php echo $data['image']; ?>" alt="Product 1" class="img-fluid" style="width: 70px; height: auto;">
                                </a>
                            </td>
                            <td><?php echo $data['product_name']; ?></td>
                            <td>₹<?php echo $data['price']; ?></td>
                            <!-- <td><span class="badge badge-success">In Stock</span></td> -->
                            <td style="width: 200px;">
                                <a href="cart_action.php?u_id=<?php echo  $_SESSION['id'];?> &pid=<?php echo $data['p_id']; ?>" style="text-decoration:none">
                                  <button class="btn btn-lg btn-success">Add to Cart</button>
                                </a>
                                <a href="wishlist_remove.php?id=<?php echo $data['id']; ?>">
                                    <button class="btn btn-lg btn-danger">Remove</button>
                                </a>
                            </td>
                        </tr>
                        
                        <?php
                          }
                        }else{
                          echo "<tr><td colspan='6' class='text-center'>Your wishlist is empty.</td></tr>";
                        }
                        ?>

                        <!-- <tr>
                            <td><img src="https://via.placeholder.com/50" alt="Product 2" class="img-fluid"></td>
                            <td>Product 2</td>
                            <td>$35.00</td>
                            <td><span class="badge badge-danger">Out of Stock</span></td>
                            <td style="width: 200px;">
                                <button class="btn btn-lg btn-success">Add to Cart</button>
                                <button class="btn btn-lg btn-danger">Remove</button>
                            </td>
                        </tr> -->
                        <!-- <tr>
                            <td><img src="https://via.placeholder.com/50" alt="Product 3" class="img-fluid"></td>
                            <td>Product 3</td>
                            <td>$50.00</td>
                            <td><span class="badge badge-success">In Stock</span></td>
                            <td style="width: 200px;">
                                <button class="btn btn-lg btn-success">Add to Cart</button>
                                <button class="btn btn-lg btn-danger">Remove</button>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<?php
include('footer.php');
include('footerlink.php');
?>
