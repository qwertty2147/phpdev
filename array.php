<?php
$car = array ("volvo","BMW","honda","Benz","MG");
$carlengt = count($car);
for ($i=0;$i<=$carlengt;$i++){
    if($car[$i]=="BMW"){
    echo "this is my Car : ".$car[$i]."<br>";
    }
    else{
    echo "other car : ".$car[$i]."<br>";
    }
}