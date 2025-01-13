<!-- include('user_function.php');

$selected_address_id = $_POST['selected_address'];
$cart_data = displaycart(); // Fetch cart details for the user -->

<?php
// session_start();
// include('headerlink.php');
// include('header.php');
// //include('user_function.php');

// // Example: Total price calculation
// $totalprice = 1500; // Example subtotal
// $shipping = 10;
// $grandtotal = $totalprice + $shipping;


include('headerlink.php');
include('header.php');
//include('user_function.php');

$user_id = $_SESSION['id']; // Assuming user ID is stored in session

// Get total price from session
$totalprice = isset($_SESSION['cart_total']) ? $_SESSION['cart_total'] : 0;

// If no items are in the cart, redirect to cart page
// if ($totalprice == 0) {
//     header('Location: cart.php');
//     exit;
// }
// $pid=$_GET['pid'];
// $pid=getorderProducts($pid);
// // print_r($pid);
// if(!empty($pid)){
//     foreach($pid as $alldata){
//         $data=$alldata;
//         // print_r($data);
//     }
// }
$uadd = fetchUserAddress($_SESSION['id']);
// print_r($uadd);
foreach ($uadd as $alldata) {
    $dataadd = $alldata;
    // print_r($dataadd);

}
?>
<?php
// Create a DateTime object for a specific date
$date = new DateTime();

// Add 5 days to the specific date
$date->modify('+5 days');

// Display the new date
$delevery_date = $date->format('d-m-y');
?>
<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="cart.php">Cart</a></li>
            <li class="breadcrumb-item"><a href="checkout.php">Checkout</a></li>
            <li class="breadcrumb-item active" aria-current="page">Payment</li>
        </ol>
    </nav>
</div>

<div class="py-3 py-md-4">
    <div class="container">
        <h4>Payment</h4>
        <hr>

        <div class="row">
            <!-- Left Section: Order Summary -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="text-primary">Order Summary</h4>
                        <hr>
                        <!-- <p><strong>Subtotal:</strong> ₹<?php echo $data['price']; ?></p> -->
                        <!-- <p><strong>Shipping:</strong> ₹10.00</p> -->
                        <h4><strong>Total:</strong> ₹<?php if (!empty($data['price'])) {
                                                            echo $data['price'];
                                                        } else {
                                                            echo $_GET['total_amount'];
                                                        } ?></h4>
                    </div>
                </div>
            </div>

            <!-- Right Section: Payment Options -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="text-primary">Select Payment Method</h4>
                        <hr>
                        <form id="payment-form" method="post" action="paymentAction.php">
                            <input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>">
                            <input type="hidden" <?php if(isset($_GET['pid'])){ ?>name="pid"<?php }else{?>name="p_id"<?php }?> value="<?php if(isset($_GET['pid'])){ echo $_GET['pid'];}else{echo $_GET['p_id'];}?>">
                            <input type="hidden" name="uadd" value="<?php echo $dataadd['id']; ?>">
                            <input type="hidden" name="d_date" value="<?php echo $delevery_date; ?>">
                            <input type="hidden" name="amount" value="<?php if (!empty($data['price'])) {
                                                                            echo $data['price'];
                                                                        } else {
                                                                            echo $_GET['total_amount'];
                                                                        } ?>">

                            <!-- Payment Options -->
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-check border rounded p-3 text-center">
                                        <input class="form-check-input" type="radio" name="payment_method" value="Cash on Delivery" id="cod" required>
                                        <label class="form-check-label" for="cod">
                                            <i class="fa fa-money fa-2x mb-2" style="color: green;"></i>
                                            <p>Cash on Delivery</p>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check border rounded p-3 text-center">
                                        <input class="form-check-input" type="radio" name="payment_method" value="online" id="online" required>
                                        <label class="form-check-label" for="online">
                                            <i class="fa fa-credit-card fa-2x mb-2" style="color: blue;"></i>
                                            <p>Online Payment</p>
                                        </label>
                                    </div>
                                </div>
                            </div>





                            <!-- Online Payment Fields -->
                            <!-- <div id="online-payment-box" class="mt-4" style="display: none;">
                                <h5>Online Payment Details</h5>
                                <div class="mb-3">
                                    <label for="card-number" class="form-label">Card Number</label>
                                    <input type="text" class="form-control" id="card-number" name="card_number" placeholder="Enter Card Number" style="font-size: medium;">
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="expiry-date" class="form-label">Expiry Date</label>
                                        <input type="text" class="form-control" id="expiry-date" name="expiry_date" placeholder="MM/YY" style="font-size: medium;">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="cvv" class="form-label">CVV</label>
                                        <input type="password" class="form-control" id="cvv" name="cvv" placeholder="Enter CVV" style="font-size: medium;">
                                    </div>
                                </div>
                            </div> -->

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary btn-lg btn-block mt-3" style="font-size: medium;">Confirm Payment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script>
    document.getElementById('online').addEventListener('change', function() {
        document.getElementById('online-payment-box').style.display = 'block';
    });
    document.getElementById('cod').addEventListener('change', function() {
        document.getElementById('online-payment-box').style.display = 'none';
    });
</script> -->

<?php
include('footer.php');
include('footerlink.php');
?>