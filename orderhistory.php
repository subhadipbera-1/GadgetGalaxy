<?php
include('headerlink.php');
include('header.php');
$uid = $_SESSION['id'];
?>

<div class="container mt-5">
    <!-- <div class="row">
        -- Order Summary Section --
        <div class="col-md-6">
            <h3>Order Details</h3>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between">
                    <span>Order ID:</span>
                    <strong>#123456</strong>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Order Date:</span>
                    <strong>September 28, 2024</strong>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Status:</span>
                    <span class="badge badge-success">Shipped</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Payment Method:</span>
                    <strong>Credit Card</strong>
                </li>
            </ul>
        </div>

        -- Customer Info Section --
        <div class="col-md-6">
            <h3>Customer Information</h3>
            <ul class="list-group mb-3">
                <li class="list-group-item">
                    <strong>Name:</strong> John Doe
                </li>
                <li class="list-group-item">
                    <strong>Email:</strong> john@example.com
                </li>
                <li class="list-group-item">
                    <strong>Phone:</strong> (123) 456-7890
                </li>
                <li class="list-group-item">
                    <strong>Shipping Address:</strong> <br> 123 Main Street, Suite 500, City, Country
                </li>
            </ul>
        </div>
    </div> -->

    <div class="row mt-4">
        <div class="col-12">
            <h3>Items Ordered</h3>
            <div class="table-responsive">
                <table class="table table-striped w-100">
                    <thead class="thead-dark">
                        <tr>
                            <th>Image</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <!-- <th>Total Price</th> -->
                            <th>Status</th>
                            <th>Payment</th>
                            <th>Order Date</th>
                            <th>Delivery Date</th>
                            <th>Delivery Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $alldata = DisplayUserOrder($uid);
                        if (!empty($alldata)) {
                            foreach ($alldata as $key => $data) {

                        ?>
                                <tr>
                                    <td>
                                        <a href="productDetails.php?productid=<?php echo $data['p_id']; ?>">
                                            <img src="product_images/<?php echo $data['image']; ?>" alt="Product 1" class="img-fluid" style="width:60px;">
                                        </a>
                                    </td>
                                    <td><?php echo $data['product_name']; ?></td>
                                    <td>1</td>
                                    <td>₹<?php echo $data['price']; ?></td>
                                    <!-- <td>$40.00</td> -->
                                    <td>
                                        <span class="badge badge-success"><?php echo $data['status']; ?></span>
                                    </td>

                                    <td><?php echo $data['payment_method']; ?></td>
                                    <td><?php echo $data['order_date']; ?></td>
                                    <td><?php echo $data['delevery_date']; ?></td>
                                    <td><?php 
                                    echo $data['address'] . ', ' . 
                                         $data['city'] . ', ' . 
                                         $data['state'] . ' - ' . 
                                         $data['pin']; 
                                    ?></td>
                                    <!-- <td>
                                        <a href="#" class="btn btn-danger btn-lg">Cancel</a>
                                    </td> -->
                                    <td>
                                        <?php if ($data['status'] !== 'Cancelled') { ?>
                                            <a href="cancel_order.php?order_id=<?php echo $data['id']; ?>" class="btn btn-danger btn-lg">Cancel</a>
                                        <?php } else { ?>
                                            <span class="badge badge-danger">Cancelled</span>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <!-- <tr>
                            <td><img src="https://via.placeholder.com/50" alt="Product 2" class="img-fluid"></td>
                            <td>Product 2</td>
                            <td>1</td>
                            <td>$15.00</td>
                            <td>$15.00</td>
                            <td>
                                <span class="badge badge-warning">Pending</span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger btn-lg">Cancel</a>
                            </td>
                        </tr> -->
                                <!-- <tr>
                                    <td><img src="https://via.placeholder.com/50" alt="Product 3" class="img-fluid"></td>
                                    <td>Product 3</td>
                                    <td>3</td>
                                    <td>$10.00</td>
                                    <td>$30.00</td>
                                    <td>
                                        <span class="badge badge-success">Complete</span>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-danger btn-lg">Cancel</a>
                                    </td>
                                </tr> -->
                        <?php
                            }
                        } else {
                            echo "<tr><td colspan='10' class='text-center' style='padding-bottom: 53px;'>No orders found</td></tr>"; 

                        }
                        ?>
                    </tbody>
                    <!-- <tfoot>
                        <tr>
                            <th colspan="4" class="text-right">Subtotal:</th>
                            <th>$85.00</th>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-right">Shipping:</th>
                            <th>$5.00</th>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-right">Total:</th>
                            <th>$90.00</th>
                        </tr>
                    </tfoot> -->
                </table>
            </div>
        </div>
    </div>
</div>

<?php
include('footer.php');
include('footerlink.php');
?>