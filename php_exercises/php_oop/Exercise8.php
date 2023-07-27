<?php
    abstract class Animal
    {
        abstract public function eat();

        abstract public function makeSound();
    }

    class Dog extends Animal
    {
        public function eat()
        {
            echo "Dog eating" . "<br>";
        }

        public function makeSound()
        {
            echo "Dog sounds" . "<br>";
        }
    }

    class Cat extends Animal
    {
        public function eat()
        {
            echo "Cat eating" . "<br>";
        }

        public function makeSound()
        {
            echo "Cat sounds" . "<br>";
        }
    }

    class Bird extends Animal
    {
        public function eat()
        {
            echo "Bird eating" . "<br>";
        }

        public function makeSound()
        {
            echo "Bird sounds" . "<br>";
        }
    }

    $dog = new Dog();
    $dog->eat();
    $dog->makeSound();

    $cat = new Cat();
    $cat->eat();
    $cat->makeSound();

    $bird = new Bird;
    $bird->eat();
    $bird->makesound();
?>