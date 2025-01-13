<?php
include('db1_connection.php'); // Replace with your database connection file
session_start();

if (isset($_GET['order_id']) && isset($_SESSION['id'])) {
    $order_id = $_GET['order_id'];
    $uid = $_SESSION['id'];

    // Update the order status to 'Cancelled'
    $query = "UPDATE orders SET status = 'Cancelled' WHERE id = ? AND user_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ii", $order_id, $uid);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Order cancelled successfully.";
    } else {
        $_SESSION['message'] = "Failed to cancel the order.";
    }

    $stmt->close();
    $conn->close();

    // Redirect back to the orders page
    header("Location: orderhistory.php");
    exit();
}
?>
