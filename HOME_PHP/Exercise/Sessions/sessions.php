
<form action="" method="post">

<label for="name" id="username">Username: </label>
<input type="text" name="username" value=""> <br>

<label for="age" id="pwd">Password: </label>
<input type="pwd" name="pwd" value=""><br>

<br>

<input type="submit" name="submit" value="Submit">

<br>

</form>


<?php




if(isset($_POST["submit"])) {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

    $password = $_POST["pwd"];

    if ($username == "John Doe" && $password == "password") {
        $_SESSION["username"] = $username;
        header("Location: /HOME_PHP/Exercise/Extras/dashboard.php");
    } else {
        echo "incorrect login";
    }
   
}



?>