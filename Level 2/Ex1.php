<?php
/*
Seguint l’exercici anterior, imagina com ampliaries l’estructura que has creat per representar un Cercle i el seu corresponent càlcul d’àrea.
*/

interface AreaCalculus {
    public function calculateArea() : float;
}

abstract class Shape implements AreaCalculus {

    abstract public function calculateArea() : float;
}

class Triangle extends Shape {
    public float $width;
    public float $height;

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(): float {
        return $this->width*$this->height*0.5;
    }

}

class Rectangle extends Shape {
    public float $width;
    public float $height;

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea(): float {
        return $this->width*$this->height;
    }

}

class Circle extends Shape {
    public float $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function calculateArea(): float {
        return pi() * $this->radius ** 2;
    }
}

//Testing
$triangle1= new Triangle(10,5);
echo "Area del triangulo: " . $triangle1->calculateArea() . "<br>";

$rectangle1= new Rectangle(15,4);
echo "Area del rectangulo: " . $rectangle1->calculateArea() . "<br>";

$circle1 = new Circle (5);
echo "Area del circulo: " . $circle1->calculateArea() . "<br>";


?>