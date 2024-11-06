<?php

//  Access Modifier

class MyHouse
{

    private $myWife = "Angle omuk";
    protected $mySon = "Batash";
    public $myHousekeper = "Akash";

    function demo()
    {
        echo $this->mySon;
    }

}
class MyShoshurHouse extends MyHouse
{
    function demo()
    {
        echo $this->mySon;
    }

}
class MyFriendHouse
{
    function demo()
    {
        $objHouse = new MyHouse();
        echo $objHouse->myHousekeper;
    }
}

$objFrndHouse = new MyFriendHouse();
echo $objFrndHouse->demo();