<?php



echo "<h3>SWITCH</h3>";

// if the color is red, output smth

$color = "red";

switch ($color) {
    case "red":
        echo "Name a flag with the color red! ";
        break;
    case "blue":
        echo "Name a flag with the color blue! ";
        break;
    default: 
    echo "You're out! ";
}
    

echo "<h3>LOOPS</h3>";

// as long as i <= 6 output i

$i = 1;

while ($i <= 6) {
    echo $i . "<br>";
    $i++;
}


// output i as long i < 6 

$y = 2;

do {
    $y++;
    echo "as long as i < 6 = " . $y . "<br>";
} while ($y < 5);

// create a loop that runs from 0 to 9

for ($x = 0; $x <= 9; $x++) {
    echo "looped this: " . $x . "<br>";
}



// loop through arrays

$numbers = [1, 2, 3, 4, 5, 6, 7, 8];

foreach ($numbers as $digits) {
    echo $digits * 2 . " ";
    echo "<br>";
}


// add to an associative array

$person = [

    "name" => "Johnson",
    "age" => 32, 
    "location" => "San Francisco",
    "mail" => "johnson@mail.com"

];

echo "<br>";

array_push($person, "food", "Rice");
print_r($person);

echo "<br>";
echo "<br>";

$age = array("Peter"=> 35, "Ben"=> 37, "Joe"=> 43, "Alex" => 39);

asort($age);

foreach ($age as $newName => $newAge)  {
    echo $newName . " " . $newAge . " ";
}


echo "<br>";
echo "<br>";

// Descending Order according to VALUE

arsort($age);

foreach ($age as $newName => $newAge)  {
    echo $newName . " " . $newAge . " ";
}


echo "<br>";
echo "<br>";

// Ascending Order according to KEY


ksort($age);

foreach ($age as $newName => $newAge)  {
    echo $newName . " " . $newAge . " ";
}


echo "<h3>FORMS</h3>";

/*
<form action="welcome.php" method="get">
First name: <input type="text" name="fname">
</form>

*/

// echo $_GET["fname"];

echo "Read input";



echo "<h3>DATES</h3>";



// Output the weekday of today 

echo date("l");

// Output a date like this (2023.03.10)

echo " " . date("Y.m.d");



echo "<br>";
echo "<br>";



$today = getdate();
echo $today["year"] . "." . $today["mday"] . "." . $today["mon"];


// https://www.php.net/manual/en/function.getdate.php
// https://www.php.net/manual/de/function.date.php 




?>