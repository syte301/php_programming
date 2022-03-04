<?php

// $num = [11,12,13];

// foreach ($num as $val) {
//   $val++;
// }

// print_r($num);

// $a = '20';
// $a -= 5;
// echo $a++;

// class A {
//   public function __constructor()
//   {
//       echo 'Hello';
//   }
// }

// class B extends A {
//   public function __constructor() {

//   }
// }
// $c = new B();

// class Fruit 
// {

// }

// class Orange extends Fruit {}


// interface HasMouth 
// {
//   public function eat(Fruit $fruit);
// }

// class Worm implements HasMouth
// {
//   public function eat(Orange $fruit) 
//   {
//     echo false;
//   }
// }

// $w = new Worm();
// $w->eat(new Orange());

// function foo(&bar) {
//   $bar *= 2;
//   return $bar;
// }

// $x = 3;
// $y = foo($x);
// $x = 5;

// echo $x, ', ', $y; 

// interface Foo {
//   const A= 'Foo';
// }

// class Bar implements Foo
// {
//   const A = 'Bar';
// }

// echo Bar::A;

function func(&$r)
{
  $r++;
}

$r = 1;
func(func($r));
echo $r;



?>
