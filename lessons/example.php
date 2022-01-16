<pre>
<?php

$array = [4,5,6,2,1,3];

print_r($array);

sort($array);

print_r($array);

rsort($array);

print_r($array);

function test ($a,$b): string {
    return (string) $a . (string) $b;
}

echo test (1,2);

$number = 10;
echo '<br>';
echo gettype($number);
echo '<br>';
$number = (string) $number;
echo gettype($number);

$digit = 3.1415;
echo '<br>';
echo gettype($digit);