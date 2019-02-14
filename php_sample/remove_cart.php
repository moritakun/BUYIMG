<?php
session_start();
unset($_SESSION["cart"][$_POST["product_id"]]);
header("Location:cart.php");
?>
