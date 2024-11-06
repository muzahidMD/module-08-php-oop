<?php

// Abstract 
abstract class Father
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

// $objFather = new Father();
// echo $objFather->print100();
$objSon = new Son();
echo $objSon->print100();