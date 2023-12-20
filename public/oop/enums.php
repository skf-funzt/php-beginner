<pre>
<?php

enum ProductType: string {
  case DIGITAL = 'Digital';
  case PHYSICAL = 'Physical';
}

class Product {
  private $name;
  private $price;
  private $type;

  public function __construct(string $name, float $price, ProductType $type) {
    $this->name = $name;
    $this->price = $price;
    $this->type = $type;
  }

  public function getName(): string {
    return $this->name;
  }

  public function getPrice(): float {
    return $this->price;
  }

  public function getType(): ProductType {
    return $this->type;
  }

  public function display() {
    echo "Product: {$this->getName()}\n Price: {$this->getPrice()}\n Type: {$this->getType()->value}\n";
  }
}

$product1 = new Product("Test Product 1", 100, ProductType::DIGITAL);
$product1->display();

$product2 = new Product("Test Product 2", 200, ProductType::PHYSICAL);
$product2->display();

?>
</pre>
