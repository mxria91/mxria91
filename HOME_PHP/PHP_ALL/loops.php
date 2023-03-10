<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>


<?php

// for - Loops 

for ($x = 10; $x <= 20; $x++) {
    echo "You are my number " . $x;
    echo "<br>";
}


$message = ["One", "Two", "Three", "Four", "Five"];

for ($y = 0; $y < count($message); $y++) {
    echo $message[$y] . " ";
}



// foreach - Loops

$z = ["Tupac", "50-Cent", "Eminem", "Kanye West"];


echo "<br>";

foreach ($z as $rapper) {   // die einzelnen werte aus dem array gehen durch die schleife und werden in einer neuen variable gespeichert und ausgegeben.
    echo "<br>";
    echo $rapper . " " . "<br>";
}


foreach ($z as $index => $oldRapper) {   // hier soll zusätzlich zu den array values der index mit ausgegeben werden.
    echo "<br>";
    echo $index . "----> " . $oldRapper . " " . "<br>";  // $index muss auch ge-echoed werden.
}


// foreach für assoziative arrays 
// es sollen alle werte aus dem array ausgegeben werden key und value!

$songs = [
    "singer" => "Beyonce",
    "song" => "Love on Top",
];

foreach ($songs as $key => $value) {
    echo "<br>";
    echo "$key - $value" . "<br>";
}





// while - Loops
$x = 1;
echo "<br>";
while ($x <= 10) {
    $x++; // Aktion einfügen, ansonten Endlos-Schleife
    echo " You lose.";
    echo "<br>";
}




?>
    
</body>
</html>