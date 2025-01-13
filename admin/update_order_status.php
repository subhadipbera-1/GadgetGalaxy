<?php
// include('admin_headerlink.php');
// include('admin_header.php');
// include('admin_function.php');
include('../db1_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the order ID and new status from the form
    $order_id = $_POST['order_id'];
    $new_status = $_POST['status'];

    // Update the order status in the database
    $sql = "UPDATE orders SET status = '$new_status' WHERE p_id = '$order_id'";

    if (mysqli_query($conn, $sql)) {
        // Redirect back to the orders page with the updated status
        header("Location: all_order.php"); // Update with the correct page URL
        exit();
    } else {
        echo "Error updating status: " . mysqli_error($conn);
    }
}
?>
