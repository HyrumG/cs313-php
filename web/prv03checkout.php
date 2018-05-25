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
    <title>Checkout</title>
</head>
<body>
    <h2>Please fill out the information below.</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name:
        <input type="text" name="name" value="">
        <br>
        Street:
        <input type="text" name="street" value="">
        <br>
        House Number:
        <input type="text" name="number" value="">
        <br>
        City:
        <input type="text" name="city" value="">
        <br>
        State:
        <input type="text" name="state" value=""> 
        <br>
        Zip Code:
        <input type="text" name="zip" value="">
        <br>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    $name = $street = $houseNumber = $city = $state = $zip = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $street = test_input($_POST["street"]);
        $houseNumber = test_input($_POST["houseNumber"]);
        $city = test_input($_POST["city"]);
        $state = test_input($_POST["state"]);
        $zip = test_input($_POST["zip"]);
        
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $_SESSION['name'] = $name;
    $_SESSION['street'] = $street;
    $_SESSION['houseNumber'] = $houseNumber;
    $_SESSION['city'] = $city;
    $_SESSION['state'] = $state;
    $_SESSION['zip'] = $zip;
    
    ?>
    <br>
    <br>
    <a href="viewCart.php">Click to view cart</a>
    <a href="confirmation.php">Click to place order</a>
</body>
</html>