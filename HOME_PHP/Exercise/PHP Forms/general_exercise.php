<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercises</title>
</head>
<body>
    
<h1>Submitting Forms with the POST Method</h1>

<form action="" method="post">

<label for="name" id="name">Name: </label>
<input type="text" name="name" value=""> <br>

<label for="age" id="age">Age: </label>
<input type="text" name="age" value=""><br>

<br>

<input type="submit" name="submit" value="Submit">

<br>

</form>


<?php

// check if SUBMIT is set so that when page is entered first time, no error will be shown

if(isset($_POST["submit"])) {
    echo $_POST["name"];
    echo $_POST["age"];
}




// Check Values:

echo "<pre>";
print_r($_POST);
echo "</pre>";


?>



</body>
</html>

