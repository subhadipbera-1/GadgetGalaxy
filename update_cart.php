<?php
include('user_function.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $productId = $data['id'];
    $quantity = $data['quantity'];

    // Update cart in session or database
    $result = updateCartQuantity($productId, $quantity);

    echo json_encode(['success' => $result]);
}

function updateCartQuantity($productId, $quantity) {
    // Update logic for session-based or database cart
    // Example for session-based cart:
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] == $productId) {
            $item['quantity'] = $quantity;
            return true;
        }
    }
    return false;
}
?>
