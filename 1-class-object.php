<?php
// class
class Car
{
    public $color = "Red";

    public function drive()
    {
        echo "I am driving";
    }
    public function washing()
    {
        echo "I am washing";
    }
}

class Person
{
    public $name;
    public $age;

    function introduce()
    {
        echo "Hi, I am {$this->name} and I am {$this->age} years old. \n";
    }
}
// $carObj=new Car();


$john = new Person(); // object
$john->name = "John Doe";
$john->age = 24;
// echo $john->name;
// echo "Hi, I am {$john->name} and I am {$john->age} years old. \n";
$john->introduce();

$jane = new Person(); // Object
$jane->name = "Jane Doe";
$jane->age = 24;
// echo "Hi, I am {$jane->name} and I am {$jane->age} years old. \n";
$jane->introduce();

// example


// instantiate
class MileageCalculator
{
    public $pricePerLitter;
    public $distance;
    public $totalFuelPrice;

    function calculateKMPL()
    {
        $totalFuel = $this->totalFuelPrice / $this->pricePerLitter;
        $milage = $this->distance / $totalFuel;
        echo "The mileage of the vehicle is {$milage} kmpl.\n";
    }
}

$motorcycle = new MileageCalculator();
$motorcycle->pricePerLitter = 122;
$motorcycle->distance = 100;
$motorcycle->totalFuelPrice = 500;
$motorcycle->calculateKMPL();

