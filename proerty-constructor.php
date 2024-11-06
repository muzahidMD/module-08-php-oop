<?php

class PetrolMileageCalculator
{
    public function __construct(public $pricePerLitter, public $distance, public $totalFuelPrice)
    {
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

$motorcycle = new OctaneMileageCalculator(122, 100, 300);
$motorcycle->calculateKMPL();