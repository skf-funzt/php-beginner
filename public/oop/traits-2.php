<?php
namespace Serialization;
trait JsonSerializable {
  public function toJson() {
    return json_encode(get_object_vars($this));
  }
}

trait JsonDeserializable {
  public function fromJson($json) {
    $data = json_decode($json, true);
    foreach ($data as $key => $value) {
      if (property_exists($this, $key)) {
        $this->$key = $value;
      }
    }
  }
}
// ----- another files in another directory ----- //
class Product {
  use JsonSerializable, JsonDeserializable;

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
}

$product = new Product("Test Product", 100);
$json = $product->toJson();
echo $json;
echo "\n";

// ----- another server -----//

$newProduct = new Product("", 0);
$newProduct->fromJson($json);
echo $newProduct->toJson();

?>