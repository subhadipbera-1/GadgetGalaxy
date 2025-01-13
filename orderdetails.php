<?php
session_start();
include('headerlink.php');
include('header.php');
include('db_connection.php');

$user_id = $_SESSION['id'];
$order_id = $_GET['order_id'];

$sql = "SELECT orders.id AS order_id, orders.total_price, orders.payment_method, orders.created_at, 
               address.name, address.address, address.pin 
        FROM orders 
        JOIN address ON orders.address_id = address.id 
        WHERE orders.user_id = ? AND orders.id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $user_id, $order_id);
$stmt->execute();
$order = $stmt->get_result()->fetch_assoc();
?>

<div class="container mt-3">
    <h4>Order Details</h4>
    <p><strong>Order ID:</strong> <?php echo $order['order_id']; ?></p>
    <p><strong>Total Price:</strong> ₹<?php echo $order['total_price']; ?></p>
    <p><strong>Payment Method:</strong> <?php echo ucfirst($order['payment_method']); ?></p>
    <p><strong>Address:</strong> <?php echo $order['address']; ?>, <?php echo $order['pin']; ?></p>
</div>

<?php include('footer.php'); include('footerlink.php'); ?>
