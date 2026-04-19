<?php
/*
Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la figura.
*/

abstract class Shape {

    public float $width;
    public float $height;

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }

    abstract public function calculateArea() : float;
}

class Triangle extends Shape {
    public function calculateArea(): float {
        return $this->width*$this->height*0.5;
    }

}

class Rectangle extends Shape {
    public function calculateArea(): float {
        return $this->width*$this->height;
    }

}


//Testing
$triangle1= new Triangle(10,5);
echo "Area del triangulo: " . $triangle1->calculateArea() . "<br>";

$rectangle1= new Rectangle(15,4);
echo "Area del rectangulo: " . $rectangle1->calculateArea() . "<br>";


?>