<?php

// parent keyword

class Father
{
    public $num1 = 100;
    public $num2 = 200;

    function addTwo()
    {
        return $this->num1 + $this->num2;
    }

}


class Son extends Father
{
    function mulTwo()
    {
        $dad = parent::addTwo();
        echo $dad * 30;
    }
}


$objSon = new Son();
echo $objSon->mulTwo();