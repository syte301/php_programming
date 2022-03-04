<?php

class A
{
    public function sayHello()
    {
        return 'Hello, I am A';
    }
}

class B extends A
{

}

// $a = new A();
$b = new B();
echo $b->sayHello();
// var_dump($a instanceof B);

 ?>
