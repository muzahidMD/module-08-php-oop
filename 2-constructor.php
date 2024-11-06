<?php

// Constructor 
// class car
// {
//     public function __construct()
//     {
//         echo "Auto light on, Auto Sensor on, Auto Pilot on.";
//     }
//     public $color = "Red";

//     public function drive()
//     {
//         echo "I am driving";
//     }
//     public function washing()
//     {
//         echo "I am washing";
//     }
// }

// Construction parameter
class car
{
    public function __construct($num1, $num2, $num3)
    {
        echo $num1 + $num2 + $num3;
    }
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

// object 
// $carObj = new car(1, 2, 3);
// echo PHP_EOL;


class Person
{
    public function __construct($name)
    {
        echo "I am a person and my name is {$name} \n";
    }
}
// $john = new Person("John");
// $jane = new Person("Jane");
// $jimmy = new Person("Jimmy");

// instantiate
class MileageCalculator
{
    public $pricePerLitter;
    public $distance;
    public $totalFuelPrice;

    public function __construct($pricePerLitter, $distance, $totalFuelPrice)
    {
        $this->pricePerLitter = $pricePerLitter;
        $this->distance = $distance;
        $this->totalFuelPrice = $totalFuelPrice;
    }
    function calculateKMPL()
    {
        $totalFuel = $this->totalFuelPrice / $this->pricePerLitter;
        $milage = $this->distance / $totalFuel;
        echo "The mileage of the vehicle is {$milage} kmpl.\n";
    }
}

// $motorcycle = new MileageCalculator(122, 100, 400);
// $motorcycle->calculateKMPL();

class PetrolMileageCalculator
{
    public $pricePerLitter = 122;
    public $distance;
    public $totalFuelPrice;

    public function __construct($distance, $totalFuelPrice)
    {
        $this->distance = $distance;
        $this->totalFuelPrice = $totalFuelPrice;
    }
    function calculateKMPL()
    {
        $totalFuel = $this->totalFuelPrice / $this->pricePerLitter;
        $milage = $this->distance / $totalFuel;
        echo "The mileage of the vehicle is {$milage} kmpl and it runs on petrol.\n";
    }
}

class OctaneMileageCalculator
{
    public $pricePerLitter = 130;
    public $distance;
    public $totalFuelPrice;

    public function __construct($distance, $totalFuelPrice)
    {
        $this->distance = $distance;
        $this->totalFuelPrice = $totalFuelPrice;
    }
    function calculateKMPL()
    {
        $totalFuel = $this->totalFuelPrice / $this->pricePerLitter;
        $milage = $this->distance / $totalFuel;
        echo "The mileage of the vehicle is {$milage} kmpl and it runs on octane.\n";
    }
}

$car = new PetrolMileageCalculator(100, 2000);
$car->calculateKMPL();

$motorcycle = new OctaneMileageCalculator(100, 300);
$motorcycle->calculateKMPL();