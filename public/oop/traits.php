<?php
namespace Loggable;
trait Loggable {
  public function log($message) {
    echo "<pre> Log: $message\n</pre>";
  }
}

class Product {
  use Loggable;

  private $name;
  private $price;

  public function __construct($name, $price) {
    $this->name = $name;
    $this->price = $price;
  }

  public function getName() {
    return $this->name;
  }

  public function getPrice() {
    return $this->price;
  }

  public function display() {
    $this->log("Displaying product details");
    echo "Product: {$this->getName()}, Price: {$this->getPrice()}";
  }
}

$product = new Product("Test Product", 100);
$product->display();
?>
