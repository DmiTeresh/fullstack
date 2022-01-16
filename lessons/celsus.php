<?php

$forengheit = - 50 ;

while ($forengheit <= 50) {
    echo $forengheit . '°F = '; 
    echo $celsus . '°C';
    echo  '<br>';
    // $number = $number + 1;
    // $number += 1;    
    $forengheit++;
    $celsus = ($forengheit - 32)*5/9;
}



 