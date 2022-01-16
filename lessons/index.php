<?php

include_once  'src/funcs.php';

echo "<select>";
for ($i = 0; $i < 5; $i++) {
    include "src/option.php";
}
echo "</select><hr>";



$a = 10;
echo "$a<br>";
$a = plusOne($a);
echo "$a</br>";
wrongplusOne ();
echo "$a</br>";

function plusOne ($a) {
    $a = $a + 1;
    return $a;
}

function wrongplusOne () {
    global $a;
    $a = $a + 1;
}

dump ($GLOBALS);
$GLOBALS ['a'] = 999;


