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
    <title>Confirmation Page</title>
</head>
<body>
    <h2>These are the items that you have purchsed and the address that they will be sent to.</h2>
    <?php 
    if (isset($_SESSION['items'])) {
        foreach ($_SESSION['items'] as $product) {
            echo $product, "<br>";
        }
    }

    echo $_SESSION['name'], "<br>";
    echo $_SESSION['houseNumber'], " ", $_SESSION['street'], "<br>";
    echo $_SESSION['city'], " ", $_SESSION['state'], "<br>";
    echo $_SESSION['zip'];

    ?>
</body>
</html>