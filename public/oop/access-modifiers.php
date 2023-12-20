<?php
class ParentClass {
  public $publicProperty = 'Public Property';
  private $privateProperty = 'Private Property';
  protected $protectedProperty = 'Protected Property';

  public function publicMethod() {
    echo "This is a public method.<br>";
  }

  private function privateMethod() {
    echo "This is a private method.<br>";
  }

  protected function protectedMethod() {
    echo "This is a protected method.<br>";
  }
}

class ChildClass extends ParentClass {
  public function accessParentProperties() {
    echo "Accessing parent properties:<br>";
    echo $this->publicProperty . "<br>"; // Accessible
    echo $this->privateProperty . "<br>"; // Not accessible
    echo $this->protectedProperty . "<br>"; // Accessible
  }

  public function accessParentMethods() {
    echo "Accessing parent methods:<br>";
    $this->publicMethod(); // Accessible
    // $this->privateMethod(); // Not accessible
    $this->protectedMethod(); // Accessible
  }
}

$childObj = new ChildClass();
$childObj->accessParentProperties();
$childObj->accessParentMethods();
?>