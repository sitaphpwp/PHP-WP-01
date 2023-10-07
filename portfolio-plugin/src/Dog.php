<?php

namespace App\PortfolioPlugin;

class Animal
{
    public function makeSound()
    {
        echo "Some generic sound";
    }
}

class Dog extends Animal
{
    public function makeSound()
    {
        echo "Bark";
    }
}
$dog = new Dog();
$dog->makeSound();



// class A
// {
//     public function Summation(int $a, int $b, int $c)
//     {
//         return $a + $b + $c;
//     }
// }


// class B extends A
// {
//     public function Summation(int $a, int $b, int $c, int $d)
//     {
//         return $Summation = $a + +$b + $c + $d;
//     }
// }

// php final allowed

final class test
{
    // When you declare a class as final, it means that the class cannot be extended or subclassed.
}
