<?php

$name = 'Rail';
$age = 28;
// Вот так делать не нужно!
$Age = 33;

/**
 * 
 * asdasdasd
 * 
 */

echo $name;
echo '<br>';
echo $age;
echo '<br>';
echo $Age;

$name2 = 'Ivan';


echo '<br>';
echo $name2;

$lastName = 'Mingaliev';
$last_name = 'Mingaliev';

$fullName = $name . ' ' . $lastName;
echo '<br>';
echo $fullName;

$word = 'lower_case';
$word = strtoupper($word);
echo '<br>';
echo $word;

echo 'Hello World!';
 



