<?php

class Cat
{
    private $name;
    private $color;

    public function __construct(string $name, string $color)
    {
      $this->name = $name;
      $this->color = $color; 
    }

    public function sayHello()
    {
        echo 'Привет! Меня зовут ' . $this->name . '.';
        echo 'Мой цвет ' . $this->color . '.';
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getColor(): string 
    {
        return $this->color;
    }
}

$cat1 = new Cat('Snejok','Beyaz');
$cat2 = new Cat('Barsik','SarI');
// echo $cat1->getName();
// echo $cat1->getColor();
$cat1->sayHello();
$cat2->sayHello();