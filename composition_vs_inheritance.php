<?php

// class Vehicle {
//   public function move() {
//     echo "Move the car";
//   }
//   public function makeSound() {
//     echo "beep beep";
//   }
// }
//
// class Car extends Vehicle {
//   public function accelarate() {
//     $this->move();
//   }
//
// }
//
// $car = new Car();
// $car->accelarate(); //Move the car
// $car->makeSound();

//example with composition
class Vehicle {
  public function move() {
    echo "Move the car";
  }
  public function makeSound() {
    echo "beep beep";
  }
}

class Car {
  private $vehicle;
  public function __construct(Vehicle $vehicle) {
    $this->vehicle = $vehicle;
  }
  public function accelarate() {
    $this->vehicle->move();
  }
  public function makeSound() {
    $this->vehicle->makeSound();
  }
}

$vehicle = new Vehicle();
$car = new Car($vehicle);
// $car->accelarate(); //Move the car
$car->makeSound(); //make sound


?>
