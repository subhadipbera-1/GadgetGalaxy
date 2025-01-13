<?php
include('headerlink.php');
include('header.php');

// if (!isset($_SESSION['id'])) {
//     header('Location: login.php');
//     exit;
// }

$user_id = $_SESSION['id']; // Assuming user ID is stored in session
//checking if the user is not login go to the login page
if (!isset($_SESSION['id'])) {
    // Show an alert and redirect to the login page
    echo "<script>
            alert('Please login first.');
            window.location.href = 'login.php';
          </script>";
    exit; // Prevent further rendering of the checkout page
}
$totalprice = isset($_SESSION['cart_total']) ? $_SESSION['cart_total'] : 0;

// if ($totalprice == 0) {
//     header('Location: cart.php');
//     exit;
// }

// Fetch user addresses from the database
$addresses = fetchUserAddress($user_id);
$total_price = $_GET['total_amount'];
$pid = getorderProducts($total_price);
// print_r($pid);
if(!empty($pid)){
    foreach ($pid as $alldata) {
        $data = $alldata;
        // print_r($data);
    
    }
}
?>

<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="cart.php">Cart</a></li>
            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
        </ol>
    </nav>
</div>

<div class="py-3 py-md-4 checkout">
    <div class="container">
        <h4>Checkout</h4>
        <hr>

        <div class="row">
            <!-- Cart Summary -->
            <div class="col-md-6 mb-4">
                <div class="shadow bg-white p-3">
                    <h4 class="text-primary">Cart Summary</h4>
                    <hr>
                    <?php
                    // Create a DateTime object for a specific date
                    $date = date_create(date('Y-m-d'));
                    date_add($date, date_interval_create_from_date_string("5 days"));
                    $delevery_date = date_format($date, "Y-m-d");
                    ?>
                    <p><strong>Delevery Date:<?php echo $delevery_date; ?></strong> </p>
                    <p><strong>Subtotal:</strong> ₹<?php if(!empty($data['price'])){echo $data['price'];}else{echo $_GET['total_amount'];} ?></p>
                    <!-- <p><strong>Shipping:</strong> ₹10.00</p> -->
                    <h5><strong>Total:</strong> ₹<?php if(!empty($data['price'])){echo $data['price'];}else{echo $_GET['total_amount'];} ?></h5>
                    <a href="payment.php?total_amount=<?php echo $_REQUEST['total_amount'];?>
                    <?php
                    if(isset($_GET['pid'])){
                    ?>
                    &pid=<?php echo $_GET['pid'];?>
                    <?php } else {?>
                    &p_id=<?php echo $_GET['id'];}?>"
                     style="text-decoration: none;"><button class="btn btn-primary btn-lg btn-block" id="checkout-btn" disabled>Proceed to Payment</button></a>
                </div>
            </div>

            <!-- Address Section -->
            <div class="col-md-6">
                <h4 class="text-primary">Select Shipping Address</h4>
                <hr>
                <form id="address-form" method="post" action="payment.php">
                    <?php
                    if (!empty($addresses)) {
                        foreach ($addresses as $index => $address) {
                    ?>
                            <div class="form-check mb-3 shadow bg-white p-3">
                                <input class="form-check-input" style="position: absolute;left: 10px; 
                                /* Move the radio button inside the container */ top: 50%; transform: translateY(-50%); 
                                margin: 0;" type="radio" name="selected_address" id="address<?php echo $index; ?>" value="<?php echo $address['address']; ?>" required>

                                <label class="form-check-label" style="display: block; padding-left: 40px;" for="address<?php echo $index; ?>">
                                    <strong><?php echo htmlspecialchars($address['name']); ?></strong><br>
                                    <?php echo htmlspecialchars($address['address']); ?><br>
                                    Pin: <?php echo htmlspecialchars($address['pin']); ?><br>
                                    State: <?php echo htmlspecialchars($address['state']); ?>
                                </label>
                                <a href="address_remove.php?id=<?php echo $address['id']; ?>" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%);">
                                    <i class="fa-solid fa-trash" style="color: #ff4d4d; font-size: 20px; cursor: pointer; padding: 10px; transition: color 0.3s;">
                                    </i>
                                </a>
                            </div>

                    <?php
                        }
                    } else {
                        echo "<p>No address found. Please add an address.</p>";
                    }
                    ?>
                    <!-- <button type="submit" class="btn btn-primary btn-lg mt-3">Proceed to Payment</button> -->
                </form>

                <button class="btn btn-primary btn-lg mt-3" id="add-address-btn">Add More Address</button>

                <!-- Add Address Form -->
                <div class="shadow bg-white p-3 mt-3" id="add-address-form" style="display: none;">
                    <h4 class="text-primary">Add New Address</h4>
                    <hr>
                    <form id="new-address-form" method="post" action="checkoutAction.php">
                        <input type="hidden" name="uid" value="<?php echo $user_id; ?>">
                        <!-- <div class="mb-3">
                            <label>Phone Number</label>
                            <input type="tel" name="mobile" id="pincode" class="form-control" placeholder="Enter Pin-code" required>
                        </div> -->
                        <div class="mb-3">
                            <label>Pin-code (Zip-code)</label>
                            <input type="number" name="pin" id="pincode" class="form-control" placeholder="Enter Pin-code" required>
                        </div>
                        <div class="mb-3">
                            <label>State</label>
                            <input type="text" name="state" id="pincode" class="form-control" placeholder="Enter State" required>
                        </div>
                        <div class="mb-3">
                            <label>City</label>
                            <input type="text" name="city" id="pincode" class="form-control" placeholder="Enter City" required>
                        </div>
                        <div class="mb-3">
                            <label>Full Address</label>
                            <textarea id="address" name="address" class="form-control" rows="2" placeholder="Enter Full Address" required></textarea>
                        </div>

                        <input type="submit" value="Submit" class="btn btn-primary btn-lg">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Show Add Address Form
    document.getElementById('add-address-btn').addEventListener('click', function() {
        document.getElementById('add-address-form').style.display = 'block';
    });

    // Enable Checkout Button When Address is Selected
    document.querySelectorAll('input[name="selected_address"]').forEach(input => {
        input.addEventListener('change', function() {
            document.getElementById('checkout-btn').disabled = false;
        });
    });
</script>

<?php
include('footer.php');
include('footerlink.php');
?>