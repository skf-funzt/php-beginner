<?php
$shoppingCart = [];
if (
  $_SERVER["REQUEST_METHOD"] == "POST"
  && isset($_POST['products'])
) {
  foreach ($_POST['products'] as $selectedProduct) {
    $productDetails = explode('-', $selectedProduct);
    $shoppingCart[] = [
      'product' => $productDetails[0], 
      'price' => $productDetails[1],
    ];
  }

  foreach ($shoppingCart as $key => $item) {
    $discount = 0;
    if ($item['price'] > 250) {
      $discount = 0.15; // 15% discount
    } elseif ($item['price'] > 150) {
      $discount = 0.10; // 10% discount
    } elseif ($item['price'] > 50) {
      $discount = 0.05; // 5% discount
    }

    $discountedPrice = 
      $item['price'] - ($item['price'] * $discount);

    $shoppingCart[$key]['price'] = $discountedPrice;

    echo "Applied a discount of ",
      ($discount * 100) . "% to " . $item['product'] . ".",  
      "New price is: " . $discountedPrice . "<br>";
  }
}
?>

<!DOCTYPE html>
<html>

<body>

  <h2>Select Products</h2>

  <form 
    method="post" 
    action="<?php echo $_SERVER['PHP_SELF']; ?>"
  >
    <input 
      type="checkbox" 
      id="product1" 
      name="products[]" 
      value="Product1-100"
    >
    <label for="product1">Product 1 ($100)</label>
    <br>
    <input 
      type="checkbox" 
      id="product2" 
      name="products[]" 
      value="Product2-200"
    >
    <label for="product2">Product 2 ($200)</label>
    <br>
    <input 
      type="checkbox" 
      id="product3" 
      name="products[]" 
      value="Product3-300"
    >
    <label for="product3">Product 3 ($300)</label>
    <br>
    <?php foreach ($shoppingCart as $item) : ?>
      <input 
        type="hidden" 
        name="products[]" 
        value="<?php echo $item['product'] 
          . '-' . $item['price']; ?>"
      >
    <?php endforeach; ?>
    <input type="submit" value="Submit">
  </form>

</body>

</html>