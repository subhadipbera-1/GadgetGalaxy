<?php
include('headerlink.php');
include('header.php');

// Session and cart checks
$id = isset($_SESSION['id']) ? $_SESSION['id'] : null;
$totalprice = 0;
$alldata = displaycart();

if (!empty($alldata)) {
    foreach ($alldata as $val) {
        $productTotal = $val['price'] ?? 0;
        $totalprice += $productTotal;
    }
}

$_SESSION['cart_total'] = $totalprice; // Store total price in session
?>

<section class="about">
    <div class="about_overlay">
        <div class="container">
            <div class="about_text">
                <h1>Shopping Cart</h1>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid mt-5">
    <?php if (!empty($alldata)): ?>
        <div class="row">
            <!-- Cart Items Section -->
            <div class="col-md-9">
                <div class="shopping-cart">
                    <div class="table-header row text-center">
                        <div class="col-md-2">Image</div>
                        <div class="col-md-4">Product Name</div>
                        <div class="col-md-3">Quantity</div>
                        <div class="col-md-2">Price</div>
                        <div class="col-md-1">Action</div>
                    </div>
                    <?php foreach ($alldata as $key => $val): 
                        $pid[]=$val['p_id'];
                        ?>
                        <div class="cart-item row align-items-center text-center bg-white p-3 shadow-sm mb-3 rounded">
                            <div class="col-md-2">
                                <a href="productDetails.php?productid=<?php echo $val['p_id']; ?>">
                                <img src="product_images/<?php echo htmlspecialchars($val['image']); ?>" alt="Product Image" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-md-4">
                                <h4><?php echo htmlspecialchars($val['product_name']); ?></h4>
                            </div>
                            <div class="col-md-3">
                                <div class="quantity d-flex justify-content-center">
                                    <button class="btn btn-sm btn-secondary" onclick="updateQuantity(<?php echo $key; ?>, -1);" style="font-size: medium;">-</button>
                                    <input type="number" id="item<?php echo $key; ?>" class="form-control mx-2 text-center" value="1" min="1" max="20" style="font-size: medium;">
                                    <button class="btn btn-sm btn-secondary" onclick="updateQuantity(<?php echo $key; ?>, 1);" style="font-size: medium;">+</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <p>₹<span class="product-total" data-price="<?php echo htmlspecialchars($val['price']); ?>"><?php echo htmlspecialchars($val['price']); ?></span></p>
                            </div>
                            <div class="col-md-1">
                                <a href="cart_remove.php?id=<?php echo $val['id']; ?>" class="btn btn-danger btn-lg">Remove</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Cart Summary Section -->
            <div class="col-md-3">
                <div class="cart-summary p-3 shadow rounded">
                    <h4>Cart Summary</h4>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Subtotal</span>
                            <strong>₹<span id="total_price"><?php echo $totalprice; ?></span></strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Discount</span>
                            <strong>₹<span id="total_discount">0</span></strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Delivery</span>
                            <strong>Free</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total</span>
                            <strong>₹<span id="payable_amount"><?php echo $totalprice; ?></span></strong>
                        </li>
                    </ul>
                    <?php
                    $str_pid=implode(',',$pid);
                    ?>
                    <a href="javascript:void(0);" onclick="checkout();" class="btn btn-primary btn-lg btn-block mt-3">Checkout</a>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="text-center" style="padding-bottom: 100px;">
            <h3>Your cart is empty</h3>
            <a href="index.php" class="btn btn-primary">Continue Shopping</a>
        </div>
    <?php endif; ?>
</div>

<?php
include('footer.php');
include('footerlink.php');
?>

<script>
    function updateQuantity(id, change) {
        const $item = $("#item" + id);
        const $productTotal = $item.closest('.cart-item').find('.product-total');
        const itemPrice = parseFloat($productTotal.data('price'));
        const currentQuantity = parseInt($item.val());
        const newQuantity = Math.max(1, currentQuantity + change);

        $item.val(newQuantity);
        const newProductTotal = itemPrice * newQuantity;
        $productTotal.text(newProductTotal.toFixed(2));

        const $totalPrice = $("#total_price");
        const totalPrice = parseFloat($totalPrice.text());
        const updatedTotalPrice = totalPrice + (change * itemPrice);
        $totalPrice.text(updatedTotalPrice.toFixed(2));

        $("#payable_amount").text(updatedTotalPrice.toFixed(2));
    }

    function checkout() {
        const totalAmount = $("#payable_amount").text();
        window.location.href = "checkout.php?pid=<?php echo $str_pid;?>&total_amount=" + totalAmount;
    }
</script>
