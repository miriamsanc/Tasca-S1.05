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

?>