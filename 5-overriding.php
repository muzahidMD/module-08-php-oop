<?php

// overriding

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
        for ($i = 0; $i <= 100; $i += 10) { //overriding
            echo $i . PHP_EOL;
        }
    }
}

$objSon = new Son();
echo $objSon->print100();