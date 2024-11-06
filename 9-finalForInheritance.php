<?php

// final keyword for inheritance  

class Father
{
    public function murgi()
    {
        for ($i = 0; $i <= 100; $i++) {
            echo $i . PHP_EOL;
        }
    }
    final public function jomi()
    {
        for ($i = 0; $i <= 100; $i++) {
            echo $i . PHP_EOL;
        }
    }
    public function sweemingpool()
    {
        for ($i = 0; $i <= 100; $i++) {
            echo $i . PHP_EOL;
        }
    }

}

class Son extends Father
{
    public function murgi()
    {
        for ($i = 0; $i <= 100; $i++) {
            echo $i . PHP_EOL;
        }
    }
    public function sweemingpool()
    {
        for ($i = 0; $i <= 100; $i++) {
            echo $i . PHP_EOL;
        }
    }
}

$objSon = new son();
echo $objSon->print100();
// $objFather = new Father();
// echo $objFather->print100();