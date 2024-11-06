<?php

// Abstract 
class Father
{
    public function __construct()
    {
        echo "This is father's Constructor";
    }

}

class Son extends Father
{
    public function __construct()
    {
        echo "This is son's Constructor";
    }
}

$objSon = new Son();