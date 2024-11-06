<?php

// Inheritance
class Father
{
    public function print100()
    {
        for ($i = 0; $i <= 100; $i++) {
            echo $i . PHP_EOL;
        }
    }
}

class Son extends Father
{
    public function print100()
    {
        for ($i = 0; $i <= 100; $i++) {
            echo $i . PHP_EOL;
        }
    }
}
// $objSon = new Son();
// echo $objSon->print100();

// another example
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

class OctaneMileageCalculator extends PetrolMileageCalculator
{
    public $pricePerLitter = 130;
}

$motorcycle = new OctaneMileageCalculator(100, 300);
$motorcycle->calculateKMPL();