<?php

$gamburber = 4.95;
$milk = 1.95;
$cola = 0.95;
$douceur = 0.16;
$tax = 0.075;


$price = $gamburber * 2 + $milk + $cola;
$fullprice = $price * $douceur + $price * $tax + $price;
echo $fullprice;





