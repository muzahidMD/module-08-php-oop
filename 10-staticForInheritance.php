<?php

// Access static & Non_static properties inside the class *self:: $this->

class MyGedgets
{
    public static $myDSLRCameraName = "Canon 200D";

    public $myMobileName = "Redmi Note 10 Pro Max";
    public static function Chata()
    {
        echo "I have Chata";
    }
    public function Handwatch()
    {
        echo "I have Handwatch";
    }
    public static function DSLR()
    {
        echo self::$myDSLRCameraName;
    }
    public function Mobile()
    {
        echo $this->myMobileName;
    }
}

// 1. create Object 
// 2. Access form this object

// MyGedgets::Chata();
MyGedgets::DSLR();

$gedjetObj = new MyGedgets();
echo $gedjetObj->Mobile() . PHP_EOL;