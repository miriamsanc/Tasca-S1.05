<?php

//Testing
require_once 'Animal.php';
require_once 'Cat.php';
require_once 'Dog.php';
require_once 'Mouse.php';

$Cat1 = new Cat("Garfield");
echo $Cat1-> introduceSelf();
echo $Cat1-> makeSound();

$Dog1 = new Dog("Snoopy");
echo $Dog1-> introduceSelf();
echo $Dog1-> makeSound();

$Mouse1 = new Mouse("Jerry");
echo $Mouse1-> introduceSelf();
echo $Mouse1-> makeSound();

?>