<?php
include('admin_headerlink.php');
include('admin_header.php');
include('admin_function.php');
?>

<div class="container-fluid px-4">
    <div class="row my-2">
        <div class="table-responsive mt-4">
            <table class="table bg-white rounded shadow-sm table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>No.</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>MRP</th>
                        <th>Discount(%)</th>
                        <th>Price</th>
                        <th>Address</th>
                        <th>Payment</th>
                        <th>Order Date</th>
                        <th>Delivery Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="w-100">
                    <?php
                    $alldata = DisplayOrder(); // Fetch all orders
                    if ($alldata && is_array($alldata)) {
                        foreach ($alldata as $key => $data) {
                            $status = $data['status']; // Get the current status
                    ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><img src="../product_images/<?php echo $data['image']; ?>" alt="" style="width: 50px;"></td>
                                <td><?php echo $data['product_name']; ?></td>
                                <td><?php echo $data['description']; ?></td>
                                <td><?php echo $data['mrp']; ?></td>
                                <td><?php echo $data['discount']; ?></td>
                                <td><?php echo $data['price']; ?></td>
                                <td>
                                    <?php 
                                    echo $data['address'] . ', ' . 
                                         $data['city'] . ', ' . 
                                         $data['state'] . ' - ' . 
                                         $data['pin']; 
                                    ?>
                                </td>
                                <td><?php echo $data['payment_method']; ?></td>
                                <td><?php echo $data['order_date']; ?></td>
                                <td><?php echo $data['delevery_date']; ?></td>
                                <td>
                                    <!-- Status dropdown -->
                                    <form action="update_order_status.php" method="POST">
                                        <select name="status" class="form-control" onchange="this.form.submit()" style="width: 125px;" 
                                                <?php echo ($status == 'Cancelled') ? 'disabled' : ''; ?>>
                                            <option value="Processing" <?php echo ($status == 'Processing') ? 'selected' : ''; ?>>Processing</option>
                                            <option value="Shipped" <?php echo ($status == 'Shipped') ? 'selected' : ''; ?>>Shipped</option>
                                            <option value="Delivered" <?php echo ($status == 'Delivered') ? 'selected' : ''; ?>>Delivered</option>
                                            <option value="Cancelled" <?php echo ($status == 'Cancelled') ? 'selected' : ''; ?>>Cancelled</option>
                                        </select>
                                        <input type="hidden" name="order_id" value="<?php echo $data['p_id']; ?>">
                                    </form>
                                </td>
                                <td style="padding-right: 0px; padding-left:0px;">
                                    <!-- <a href="all_product_edit_page.php?e_id=<?php echo $data['p_id']; ?>" class="btn btn-sm btn-primary">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a> -->
                                    <a href="delete_order.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-danger" style="margin-left:20px;">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                    <?php }
                    } else { ?>
                        <tr>
                            <td colspan="13" class="text-center">No orders found.</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function() {
        el.classList.toggle("toggled");
    };
</script>
<script type="text/javascript" src="../assets/js/jquery-3.7.0.min.js"></script>
<script type="text/javascript" src="../assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
<script type="text/javascript" src="../assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
</body>
</html>
