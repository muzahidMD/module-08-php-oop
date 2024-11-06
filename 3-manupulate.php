<?php

// Properties value manipulate using Construction parameter
class car
{
    public function __construct($newColor)
    {
        $this->carColor = $newColor;
    }

    public $carColor = "Red";
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
$carObj = new car("Green");

echo $carObj->carColor;
echo PHP_EOL;