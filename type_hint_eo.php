<?php

interface Animal {

   /**
    * Every animal has to eat, right?
    */
   public function eat($food);
 }


 class Cat implements Animal {
   public function eat($food) {
     echo "nom nom $food<br>";
   }
 }


 class Dog implements Animal {
   public function eat($food) {
     echo "bark bark $food<br>";
   }
 }

class Horse implements Animal {
    public function eat($food) {
        echo "qru qru $food";
    }
}


 class AnimalShelter {

   /**
    * @var array
    */
    private $animals;
    private $last;

    public function __construct($animal) {
        $this->animals = $animal;
        $this->last = [];
    }

    /**
     * Add a new animal to our little shelter
     *
     * @param Animal
     * @return void
     */
    public function addAnimal(Animal $animal) {
       $last = $animal.sizeof();
       $this->animals[] = $animal;
    }

    /**
     * Time to feed the animals!
     *
     * @param string
     * @return void
     */
    public function feed($food) {
       foreach($this->animals as $animal) {
         $animal->eat($food);
       }
    }
 }

$cat = new Cat;
$dog = new Dog;
$horse = new Horse;

$shelter = new AnimalShelter;

$shelter->addAnimal($cat);
$shelter->addAnimal($dog);
$shelter->addAnimal($horse);

$shelter->feed('milk');

?>
