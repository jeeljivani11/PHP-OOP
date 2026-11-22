<?php

class Car   //class
{
    public $name = "bmw";          //properties
    public $color = "black";

    public function start()   //method 
    {
        echo "car is starting";
    }
}

$car1 = new car();  //new object 

echo $car1->name;
echo "<br>";
echo $car1->color;
echo "<br>";

$car1->start();

?>