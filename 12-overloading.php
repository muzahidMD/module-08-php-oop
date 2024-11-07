<?php

class Gadha
{

    public function __call($name, $argument)
    {
        print_r($argument);
    }
}

$objGadha = new Gadha();
$objGadha->rahim("muzahid");
$objGadha->karim("muzahid");
$objGadha->modhu("muzahid");