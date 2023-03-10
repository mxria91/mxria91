<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>


<h1>Functions</h1> 
<hr>



<?php


function registerUser () {
    echo "Simple Call-Function: " . " Hello" . "<br>";
}

registerUser();







// Function Scope

function loginName () {
    $x = 10 ;
    echo $x . " : Function Scope" . "<br>";
}

// echo $x; // This is not going to work since the variable can only be used within the function;
loginName();








// Global Scope

$y = 50;

function loginUser () {
    global $y; // this has to be set if you want to use a variable from the outside
    echo $y . " : Global Scope" . "<br>";
}

loginUser(); // This is also not going to work since the variable has been declared as a global variable and can't be used in a function, unless you set it to global 












// Passing Parameters to Arguments

function holdMyBeer ($beer) { // this is the argument 
    echo "Passing Parameters into Arguments:  " . "Hold my " . $beer . "!"; 
}

holdMyBeer("Stiegl"); // this is the parameter being passed into an argument














// function mostly needs a return 

function sum ($n1, $n2) {
    return $n1 + $n2; // Wenn return innerhalb einer Funktion aufgerufen wird, beendet es die Ausführung der Funktion augenblicklich und übergibt den Parameter als Rückgabewert der Funktion
}

echo "<br>" . "Return with Function: " . sum(1, 5);  // there is not a lot going to happen here if you don't enter echo; with return you only set the variables to save the new parameter values but since you did not echo it out, it is not going to do anything.












// it is also possible to not set parameters when calling the function, instead you can set default values into the argument

function maths( $num1 = 10, $num2 = 20) {
    echo "<br>";
    return $num1 + $num2;
}

$mathsNumber = maths(); // no parameters passed, but default values are being used
echo "Default Values being Passed in Argument: " . $mathsNumber;  // don't forget to echo it out!!!!
echo "<br>";












// no-named functions or ANONYMOUS Functions

$subtract = function($y1, $y2) {
    return $y1 - $y2;
}; // semicolon needed here !!!!!

echo "Anonymous Functions: " . $subtract(10,5); // function is not being calledbut the parameters are set with the variable





// single line function

$multiplication = fn($z1, $z2) => $z1 * $z2;
echo "<br>";
echo "Single Line Functions: " . $multiplication(9, 9);

















?>


    
</body>
</html>