<?php
//Testing

require_once 'Shape.php';
require_once 'Triangle.php';
require_once 'Rectangle.php';
require_once 'Circle.php';

$triangle1= new Triangle(10,5);
echo "Area del triangulo: " . $triangle1->calculateArea() . "<br>";

$rectangle1= new Rectangle(15,4);
echo "Area del rectangulo: " . $rectangle1->calculateArea() . "<br>";

$circle1 = new Circle (5);
echo "Area del circulo: " . $circle1->calculateArea() . "<br>";

?>