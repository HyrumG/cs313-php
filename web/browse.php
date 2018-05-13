<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <!-- <script src="main.js"></script> -->
    <title>Browse</title>
</head>
<body>
    <h2>Please select the items that you would like to purchase.</h2>
    <form action="add.php" method="POST">
        <input type="checkbox" name="items[]" value="Lewis Hamilton Hat"> Lewis Hamilton Hat
        <br>
        <input type="checkbox" name="items[]" value="Valtteri Bottas Hat"> Valtteri Bottas Hat
        <br>
        <br>
        <input type="submit" name="submit" value="Add to Cart">
    </form>    
    <br>
    <a href="viewCart.php">Click to View Cart</a>
</body>
</html>