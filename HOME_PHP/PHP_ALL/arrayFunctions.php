<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
</head>
<body>
    <h1>Array Functions</h1> 
    <hr>

    <?php
    
    //  working with array data


    $fruits = ["Apple", "Orange", "Melon", "Papaya", "Kiwi"];
    echo "<br>";

    


    // get length of an array

    echo "Get Length of Array: " . count($fruits);
    echo "<br>";

    // search for specific value in array

    var_dump(in_array("Papaya", $fruits));
    echo ": Search for Value in Array";
    echo "<br>";

    // Add to Array

    $fruits[] = "Durian";
    print_r($fruits); // gives the whole array with index 
    echo "<br>"; array_push($fruits, "Blueberries", "Strawberry");
    echo "<br>";
    print_r($fruits);

    // Add to Beginning of Array

    $names = ["Maria", "Michael", "Frank"];
    echo "<br>";
    echo "<br>";
    array_unshift($names, "David");
    echo "<br>";
    echo "Add to Beginning of Array: ";
    print_r($names);
    echo "<br>";


    // Remove Last Value from Array

    array_pop($names);
    echo "<br>";
    echo "Remove Last Value from Array: ";
    print_r($names);
    echo "<br>";

    // Remove from Beginning of Array

    array_shift($names);
    echo "<br>";
    echo "Remove First Value from Array: ";
    print_r($names);
    echo "<br>";

    // Remove Value incl. Index

    unset($names[0]);
    echo "<br>";
    echo "Remove Index and Value from Array: ";
    print_r($names);

    // Split Values into Chunks


    echo "<br>";
    $cities = ["London", "Nice", "Bali", "New York", "Paris", "Tokyo"];
    echo "<br>";
    $vacay = array_chunk($cities, 2);
    print_r($vacay);
    echo "<br>";




    // Merge Arrays

    $arr1 = [1,2,3,4];
    $arr2 = [5,6,7,8];
    echo "<br>";
    echo "Merge Arrays: " . "<br>";
    $arr3 = array_merge($arr1, $arr2);

    print_r($arr3);
    echo "<br>";





    // Use two arrays and combine the first value of array1 into the key and the second value of array2 into the value


    $a = ["green", "yellow", "red"];
    $b = ["apple", "citrus", "strawberry"];
    echo "<br>";
    echo "Combine Two Arrays and set new Key/Value: " . "<br>";
    $c = array_combine($a, $b);

    print_r($c);
    echo "<br>";




    // Echo only the Keys of an Array

    $keyArray = array_keys($c);
    echo "<br>";
    print_r($keyArray);
    echo "<br>";





    // Flip Key and Value of Arrays

    echo "<br>";
    echo "Flip Key and Value of Arrays: " . "<br>";
    $d = array_flip($c);
    print_r($d);
    echo "<br>";
    echo "<br>";


    // Create a Range of Numbers
    echo "Create a Range of Numbers in Array:  ";
    $range = range(1, 20);
    echo "<br>";
    print_r($range);
    echo "<br>";
    echo "<br>";





    ?>



    
</body>
</html>