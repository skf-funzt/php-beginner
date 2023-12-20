<?php
class Car {
  const MAX_SPEED = 200;
  
  public $brand;
  public $model;
  public $color;
  
  public function __construct($brand, $model, $color) {
    $this->brand = $brand;
    $this->model = $model;
    $this->color = $color;
  }
  
  public function getBrand() {
    return $this->brand;
  }
  
  public function getModel() {
    return $this->model;
  }
  
  public function getColor() {
    return $this->color;
  }
  
  public function startEngine() {
    echo "The $this->brand $this->model is starting the engine.";
  }
  
  public function accelerate($speed) {
    if ($speed <= self::MAX_SPEED) {
      echo "The $this->brand $this->model is accelerating to $speed km/h.";
    } else {
      echo "The $this->brand $this->model cannot exceed the maximum speed of " . self::MAX_SPEED . " km/h.";
    }
  }
}

class ElectricCar extends Car {
  public function startEngine() {
    echo "The $this->brand $this->model is starting the electric engine.";
  }

  public function chargeBattery() {
    echo "The $this->brand $this->model is charging the battery.";
  }
}

$car = new Car("Ford", "Fiesta", "red");
$car->startEngine();

$electricCar = new ElectricCar("Tesla", "Model S", "black");
$electricCar->startEngine();
$electricCar->chargeBattery();
?>

