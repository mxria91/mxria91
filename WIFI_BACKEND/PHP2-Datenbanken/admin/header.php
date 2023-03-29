<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <style>
        ul {list-style-type: none;}
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Start</a></li>
            <li><a href="zutaten.php">Zutaten</a></li>
            <li><a href="logout.php">Logout</a> <br><br>Eingeloggt als: <?php echo $_SESSION["username"]; ?></li>

        </ul>
    </nav>

<main>


 
