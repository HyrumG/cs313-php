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
    <title>View Cart</title>
</head>
<body>
    <h2>The items below are in your cart</h2>
    <br>
    <?php
        if (isset($_SESSION['items'])) {
            foreach ($_SESSION['items'] as $product) {
                echo $product, "<br>";
            }
        }
    ?>
    <br>
    <br>
    <?php
    if (isset($_SESSION['items'][0])) {
        echo "<p>Click on the button below to remove the Lewis Hamilton Hat from your cart</p>";
        echo "<input type='button' name='removeLewis' value='Remove Lewis'>";

        // unset($_SESSION['items'][0]);
    }

    if (isset($_SESSION['items'][1])) {
        echo "<p>Click on the button below to remove the Valtteri Bottas Hat from your cart</p>";
        echo "<input type='button' name='removeValtteri' value='Remove Valtteri'>";

        // unset($_SESSION['items'][1]);
    }
    ?>
    <br>
    <br>    
    <a href="browse.php">Click to return to add more items</a>
    <a href="checkout.php">Click to proceed to checkout</a>

</body>
</html>