<?php

class Vehicle
{
    public function start()
    {
        echo " This is Vehicle";
    }
}
class car extends Vehicle
{
    public function drive()
    {
        echo "Drive the car";
    }
}
$c = new car();
$c->start();
$c->drive();
?>