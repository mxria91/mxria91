<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise</title>
</head>
<body>

<h1>Array</h1> 
<hr>


<?php


// echo for multiple lines
$name = "Maria";
echo "24.". "05." . "91", "<br>",  $name;
echo "<br>";





//print only takes single argument

print "hello";
echo "<br>";



// more detailed output 
var_dump($name);
echo "<br>";


//outputs string representation of variable with ' '
var_export($name);
echo "<br>";


//parse variables in strings
//wrong way to do
echo 'my name is $name';
echo "<br>";



// correct way to do

echo 'my name is ' . $name;
echo "<br>";

// another correct way

echo "my name is ${name}";
echo "<br>";


// arrays
//first way
$numbers = [1,44,55,3,5,77,234,2];

// second way
$fruits = array ("apple", "banana", "orange");
echo $fruits[2];
echo "<br>";

// print- used for arrays
print_r($fruits[1]);
echo "<br>";

//vardump arrays (index, datatype and value will be shown)

var_dump($fruits);
echo "<br>";

// define indexes of arrays individually

$cities = [

    1 => "Salzburg",
    2 => "Vienna",
    5 => "Tyrolia",
    9 => "Upper Austria"

];

echo($cities[5]);
echo "<br>";


$colors = [

    "primary" => "#f00",
    "secondary" => "#d34",
    "buttons" => "#ffffff"
];

echo($colors["primary"]);

//multidimensional arrays


$person = [

[
    "name" => "Maria",
    "age" => 30,
    "mail" => "ms.repo@gmail.com"
],

[
    "name" => "Frank",
    "age" => 20,
    "mail" => "fr.repo@gmail.com"
],


[
    "name" => "Michi",
    "age" => 40,
    "mail" => "ms.repo@gmail.com"
],

[
    "name" => "Who?",
    "age" => 50,
    "mail" => "who@gmail.com"
],

];


//first index, then next index without comma in between
echo "<br>";
echo ($person[2]["name"]);

// var_dump with json_encode
echo "<br>";
var_dump(json_encode($person));


?>
    
</body>
</html>