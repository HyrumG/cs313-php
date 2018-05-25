<?php
session_start();

$lewisHat = $_POST["items"][0];
$valtteriHat = $_POST["items"][1];

$items = array($lewisHat, $valtteriHat);

$_SESSION["items"] = $items;

// $key_items = "items";

if (isset($_SESSION['items'])) {
    foreach ($_SESSION['items'] as $product) {
        echo $product, " ";
    }
}

header('Location: browse.php');
?>