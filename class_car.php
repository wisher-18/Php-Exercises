<?php
class Car{
    var $wheels = 4;
    var $seats = 5;

    function moveWheel(){
        echo "Great! Wheels are moving...";
    }
    

}

$bmw = new Car();
echo $bmw->wheels."<br>";
echo $bmw->wheels."<br>";
echo $bmw->wheels."<br>";
$bmw->moveWheel();
?>