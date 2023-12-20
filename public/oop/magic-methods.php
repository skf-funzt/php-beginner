<?php
class Person {
  private $name;
  private $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  public function __get($property) {
    if (property_exists($this, $property)) {
      return $this->$property;
    }
  }

  public function __set($property, $value) {
    if (property_exists($this, $property)) {
      $this->$property = $value;
    }
  }
}

$person = new Person("John Doe", 25);
echo $person->name;

$person->age = 30;
echo $person->age;
?>