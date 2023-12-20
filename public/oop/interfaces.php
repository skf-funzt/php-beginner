<pre>
<?php
namespace Interfaces;
interface Product {
  public function getName();
  public function getPrice();
  public function display();
}

class DigitalProduct implements Product {
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
    echo "Digital Product: {$this->getName()}\n Price: {$this->getPrice()}";
  }
}

class PhysicalProduct implements Product {
  private $name;
  private $price;
  private $weight;

  public function __construct($name, $price, $weight) {
    $this->name = $name;
    $this->price = $price;
    $this->weight = $weight;
  }

  public function getName() {
    return $this->name;
  }

  public function getPrice() {
    return $this->price;
  }

  public function getWeight() {
    return $this->weight;
  }

  public function display() {
    echo "Physical Product: {$this->getName()}\n Price: {$this->getPrice()}\n Weight: {$this->getWeight()}";
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
