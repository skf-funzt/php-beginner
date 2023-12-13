<?php
$orderStatus = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $orderId = $_POST['orderId'];
  // Here we can search for the order inside the 
  // database
  $orderStatus = match (
      $_POST['orderStatus'] ?? 'pending'
  ) {
    'pending' => 'Your order is pending',
    'shipped' => 'Your order has been shipped',
    'delivered' => 'Your order has been delivered',
    default => 'Invalid order status',
  };
}
?>

<form method="post">
    <label for="orderId">Enter Order ID:</label>
    <input type="text" id="orderId" name="orderId" required>
    <label for="orderStatus">Select Order Status:</label>
    <select name="orderStatus" id="orderStatus">
        <option value="ordered">Ordered</option>
        <option value="pending">Pending</option>
        <option value="shipped">Shipped</option>
        <option value="delivered">Delivered</option>
    </select>
    <input type="submit" value="Submit">
</form>

<?php
if (!empty($orderStatus)) {
    // Display the order status
    echo $orderStatus;
}
?>