<?php
/*
Necessitem crear un tipus de dades que representi un animal. Els animals tenen un nom i "parlen". Hem de tenir en compte, però, que no és el mateix el so de la “parla” d’un gos, que el d’un gat, per exemple. Per tant, necessitem crear altres tipus de dades que ens ajudin a programar aquests comportaments entre diferents animals.

*/
abstract class Animal {
    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    abstract public function makeSound() : string;

    public function introduceSelf(): string {
        return "My name is " . $this->name . "\n";
    }
    
}

class Cat extends Animal {
    public function makeSound(): string{
        return "*meow* <br>";
    }

}

class Dog extends Animal {
    public function makeSound(): string{
        return "*bark* <br>";
    }
    
}

class Mouse extends Animal {
    public function makeSound(): string{
        return "*squeak* <br>";
    }
    
}

//Testing
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