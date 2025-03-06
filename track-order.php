<?php
require_once 'config/database.php';
require_once 'classes/Order.php';

$order = new Order($db);

if (isset($_GET['order_id'])) {
    $orderId = $_GET['order_id'];
    $orderDetails = $order->getOrder($orderId);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Tracking</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Order Tracking</h1>
        
        <form method="GET" action="">
            <input type="text" name="order_id" placeholder="Enter Order ID" required>
            <button type="submit">Track Order</button>
        </form>

        <?php if (isset($orderDetails) && $orderDetails): ?>
            <div class="order-details">
                <h2>Order #<?php echo htmlspecialchars($orderDetails['order_id']); ?></h2>
                <p>Status: <?php echo htmlspecialchars($orderDetails['status']); ?></p>
                <p>Order Date: <?php echo htmlspecialchars($orderDetails['order_date']); ?></p>
                <p>Total Amount: $<?php echo htmlspecialchars($orderDetails['total_amount']); ?></p>
            </div>
        <?php elseif (isset($_GET['order_id'])): ?>
            <p class="error">Order not found.</p>
        <?php endif; ?>
    </div>
</body>
</html>
