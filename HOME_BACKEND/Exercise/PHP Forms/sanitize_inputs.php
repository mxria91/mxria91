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






// with the code above a script can be inserted into a field or text area and be executed by the system. There is a possibility of security breach through harmful content.

// One way to overcome these is to save the $_POST into a variable 



if(isset($_POST["submit"])) {
    $get_name = htmlspecialchars($_POST["name"]);
    $get_age = htmlspecialchars($_POST["age"]); 
    echo $get_name;
}


// Another way is to use filter_input

if(isset($_POST["submit"])) {
    $get_name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $get_age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_SPECIAL_CHARS); 
    echo $get_name;
    echo $get_age;
}



// echo "<pre>";
// print_r($_POST);
// echo "</pre>";


?>