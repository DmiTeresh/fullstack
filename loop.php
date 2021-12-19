<?php

$number = 1;
while ($number <10) {
    echo $number . '<br>';
    // $number = $number + 1;
    // $number += 1;    
    $number++;
    
}

echo '<select>';
echo '<option selected disabled>-- Выберите значение  --</option>';
for ($i = 1; $i < 10; $i++)
    echo "<option>$i</option>";
echo '</select>';


$f = - 50 ;
while ($f < 51) {
    $c = round (($f - 32)*5/9, 2);
    echo $f . '°F = ';  
    echo $c . '°C';
    $f++;
    echo  '<br>';
   
}