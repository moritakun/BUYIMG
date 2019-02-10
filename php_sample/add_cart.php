<?php
session_start();

$_SESSION["cart"][$_POST["product_id"]]=$_POST["product_id"];

header("Location:index.html");

?>
