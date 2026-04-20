<?php
class Circle extends Shape {
    public float $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function calculateArea(): float {
        return pi() * $this->radius ** 2;
    }
}


?>