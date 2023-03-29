<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals</title>
</head>
<body>


<h1>Conditionals</h1> 
<hr>


<?php

// Operators for comparisons


/*

less than  <
greater than >
less than or equal to <=
greater than or equal to >=
equal to ==
identical to ===
!= not equal to
!== not identical to


*/


// if - statements

$name = "Maria";
$age = 31;

if ($age >= 18 && $age <= 30) {   // es werden zwei Werte miteinander verglichen, deshalb müssen auch beide variablen angeführt sein
    echo "You shall pass."; 
    echo "<br>";
} else {
    echo "Stay away.";
    echo "<br>";
}

echo "<br>";


$t = date("H");

if ($t < 12) {
    echo "Good Morning";
} else if ($t >=12 && $t < 18) {
    echo "Good Afternoon";
} else if ($t >= 18 && $t <= 20) {
    echo "Good Evening";
} else {
    echo "It's getting late";
}

echo "<br>";

// if not empty then .. else...

$posts = ["First Post"];

echo "<br>";


if (!empty($posts)) {
    echo $posts[0] ;
} else {
    echo "Post not available";
}

echo "<br>";


// Turnary takes only one line   ?    :
// used with echo and not an if-statement
// if index 1 of variable is not empty..then... else : ...
$cookieJar = ["Nutella Cookies"];

echo "<br>";
 

echo !empty($cookieJar[1]) ? $cookieJar[0] : "No Cookies";

echo "<br>";


// turnary saved into a variable (ein if statement wird geprüft und direkt in einer variable gespeichert und mit echo ausgegeben)

$inbox = [];
echo "<br>";

$mailBox = empty($inbox) ? "No New Mail" : "You received a new mail!";

echo $mailBox . "<br>";


// turnarys need an else ! if not, you will have to insert a null


$inbox1 = [];

$mailBox = !empty($inbox1) ? "New Mail" : null ;

echo $mailBox . "<br>";

var_dump($mailBox);

echo "<br>";


// Switches 

$favColor = "red";

echo "<br>";

switch($favColor) {  // pass the parameter of variable
case "blue":
    echo "Your favourite color is blue";
    break;  // break has to be inserted
case "red":
    echo "Your favourite color is red.";
    break;
case "orange":
    echo "Your favourite color is orange.";
    break;
default:     //if no matches at all, default has to be inserted
    echo "Your favorite color is not blue, red or orange.";
}











?>
    
</body>
</html>