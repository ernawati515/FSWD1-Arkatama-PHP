<?php
class Animal
{
    private $nama;
    private $jenis;

    public function __construct($nama, $jenis)
    {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function getInfo()
    {
        return "Hewan ini adalah {$this->nama} dengan jenis {$this->jenis}.";
    }
}

class Cat extends Animal
{
    public function __construct($nama)
    {
        parent::__construct($nama, "kucing");
    }

    public function getInfo()
    {
        $animalInfo = parent::getInfo();
        return $animalInfo . " Kucing ini suka makan wishkas dan suka mencakar batang pohon.";
    }
}

class Dog extends Animal
{
    public function __construct($nama)
    {
        parent::__construct($nama, "anjing");
    }

    public function getInfo()
    {
        $animalInfo = parent::getInfo();
        return $animalInfo . " Anjing ini sangat pintar dan setia terhadap tuannya.";
    }
}

// objek dari class Animal
$animal = new Animal("Harimau", "Karnivora");
echo $animal->getInfo() . "<br><br>";

// objek dari class Cat
$cat = new Cat("Kessy");
echo $cat->getInfo() . "<br><br>";

// objek dari class Dog
$dog = new Dog("Bubu");
echo $dog->getInfo() . "<br><br>";