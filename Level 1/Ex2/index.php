<?php
//Testing
require_once 'Shape.php';
require_once 'Triangle.php';
require_once 'Rectangle.php';

$triangle1= new Triangle(10,5);
echo "Area del triangulo: " . $triangle1->calculateArea() . "<br>";

$rectangle1= new Rectangle(15,4);
echo "Area del rectangulo: " . $rectangle1->calculateArea() . "<br>";


?>