<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>
</head>
<body>
        <h1>String Function</h1>
        <hr>


    
<?php


$string = "Lorem, ipsum dolor sit amet consectetur adipisicing elit.";



// String Length

echo strlen($string);
echo "<br>";

// Find the position of the first occurence of a substring in a string


echo strpos($string, "o");
echo "<br>";

// Position of last occurence in a string of a substring

echo strrpos($string, "t");
echo "<br>";


// Reverse a String

echo strrev($string);
echo "<br>";

// All Characters to Lowercase

echo strtolower($string);
echo "<br>";


// All Characters to Uppercase

echo strtoupper($string);
echo "<br>";


// String Replace 


echo str_replace("Lorem", "Hello Motherfucker", $string);
echo "<br>";


// Return a portion of a string specified by the offset and length


echo substr($string, 9, 19);
echo "<br>";

// Starts with

if(str_starts_with($string, "Hello")) {
    echo "YES.";
} else {
    echo "Fuck You." . "<br>";
}

// Ends with 

if(str_ends_with($string, "No")) {
    echo "Does not end with ... ";
} else {
    echo "Nah, bruh." . "<br>";
}























?>

</body>
</html>