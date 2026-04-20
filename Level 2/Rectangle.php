<?php
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

?>