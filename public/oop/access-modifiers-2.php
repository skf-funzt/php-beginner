<?php
class Vehicle {
  private $vin;
  protected $make;
  public $model;

  public function __construct($vin, $make, $model) {
    $this->vin = $vin;
    $this->make = $make;
    $this->model = $model;
  }

  protected function getVin() {
    return $this->vin;
  }

  public function getMake() {
    return $this->make;
  }
}

class Car extends Vehicle {
  public $numberOfDoors;

  public function __construct($vin, $make, $model, $numberOfDoors) {
    parent::__construct($vin, $make, $model);
    $this->numberOfDoors = $numberOfDoors;
  }

  public function getNumberOfDoors() {
    return $this->numberOfDoors;
  }

  public function getCarDetails() {
    return "Make: " . $this->getMake() . ", Model: " . $this->model . ", Number of Doors: " . $this->numberOfDoors;
  }
}

class Motorcycle extends Vehicle {
  public $type;

  public function __construct($vin, $make, $model, $type) {
    parent::__construct($vin, $make, $model);
    $this->type = $type;
  }

  public function getType() {
    return $this->type;
  }

  public function getMotorcycleDetails() {
    return "Make: " . $this->getMake() . ", Model: " . $this->model . ", Type: " . $this->type;
  }
}

$car = new Car("1HGCM82633A123456", "Honda", "Accord", 4);
echo $car->getCarDetails(); // Output: Make: Honda, Model: Accord, Number of Doors: 4
echo "<br>";

$motorcycle = new Motorcycle("JH2RC4407M1234567", "Honda", "CBR600RR", "Sport");
echo $motorcycle->getMotorcycleDetails(); // Output: Make: Honda, Model: CBR600RR, Type: Sport
?>