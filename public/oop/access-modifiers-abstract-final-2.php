<pre>
<?php
abstract class Product {
  protected $name;
  protected $price;

  public function __construct($name, $price) {
    $this->name = $name;
    $this->price = $price;
  }

  public function __get($property) {
    if (property_exists($this, $property)) {
      return $this->$property;
    }
  }

  abstract public function display();
}

class DigitalProduct extends Product {
  public function display() {
    echo "Digital Product: {$this->name}\n Price: {$this->price}";
  }
}

final class PhysicalProduct extends Product {
  private $weight;

  public function __construct($name, $price, $weight) {
    parent::__construct($name, $price);
    $this->weight = $weight;
  }

  public function __get($property) {
    if (property_exists($this, $property)) {
      return $this->$property;
    }
  }

  public function display() {
    echo "Physical Product: {$this->name}\n Price: {$this->price}\n Weight: {$this->weight}";
  }
}

$digitalProduct = new DigitalProduct("Digital Product", 100);
$digitalProduct->display();
echo "\n";

$physicalProduct = new PhysicalProduct("Physical Product", 200, 10);
$physicalProduct->display();
echo "\n";
?>
</pre>
