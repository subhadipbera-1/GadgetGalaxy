<?php
    include('headerlink.php');
    include('header.php');
    include('user_function.php');
    
?>

    <!---- End of Navbar ---->

    <!-- Links Section -->
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
            </ol>
        </nav>
    </div>


    <div class="container mt-5">
    <h2>Shopping Cart</h2>
    <div class="row mt-4">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $alldata=displaycart();
                        if(!empty($alldata)){
                            foreach($alldata as $val){
                        ?>
                        <tr>
                            <td><img src="product_images/<?php echo $val['image']; ?>" alt="Product 1" class="img-fluid" style="width: 70px; height: auto;"></td>
                            <td><?php echo $val['product_name']; ?></td> 
                            <td>₹<?php echo $val['price']; ?></td>
                            <td>
                                <input type="number" class="form-control" value="2" min="1" style="width: 80px; height: 35px; font-size:medium;">
                            </td>
                            <td>₹40.00</td>
                            <td style="width: 200px;">
                                <a href="checkout.php"><button class="btn btn-lg btn-primary" >Buy Now</button></a>
                                <button class="btn btn-lg btn-danger">Remove</button>
                            </td>
                        </tr>

                        <?php
                            }
                        } else {
                            echo "<tr><td colspan='5' class='text-center'>Your cart is empty.</td></tr>";
                        }
                        ?>

                        <!-- <tr>
                            <td><img src="https://via.placeholder.com/50" alt="Product 2" class="img-fluid"></td>
                            -- <td>Product 2</td> --
                            <td>$35.00</td>
                            <td>
                                <input type="number" class="form-control" value="1" min="1" style="width: 80px; height: 35px; font-size:medium;">
                            </td>
                            <td>$35.00</td>
                            <td>
                                <button class="btn btn-lg btn-primary">Add to cart</button>
                                <button class="btn btn-lg btn-danger">Remove</button>
                            </td>
                        </tr> -->
                        <!-- <tr>
                            <td><img src="https://via.placeholder.com/50" alt="Product 3" class="img-fluid"></td>
                            <td>Product 3</td>
                            <td>$15.00</td>
                            <td>
                                <input type="number" class="form-control" value="3" min="1" style="width: 80px; height: 35px; font-size:medium;">
                            </td>
                            <td>$45.00</td>
                            <td>
                                <button class="btn btn-lg btn-primary">Add to cart</button>
                                <button class="btn btn-lg btn-danger">Remove</button>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row mt-4 mb-4">
        <!-- Cart Summary Section -->
        <div class="col-md-4 offset-md-8">
            <h4>Cart Summary</h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between">
                    <span>Subtotal</span>
                    <strong>₹120.00</strong>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Shipping</span>
                    <strong>₹10.00</strong>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total</span>
                    <strong>₹130.00</strong>
                </li>
            </ul>
            <button class="btn btn-primary btn-block btn-lg" style="font-size: medium;">Proceed to Checkout</button>
        </div>
    </div>
</div>

<?php
    include('footer.php');
    include('footerlink.php');

?>
