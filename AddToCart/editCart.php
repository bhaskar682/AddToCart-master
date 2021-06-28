<?php
session_start();

$name = $_POST['name0'];
$price = $_POST['name1'];
$quantity = $_POST['name2'];
$submit = $_POST['submit'];

$product = array($name,$price,$quantity);

if($submit == "Update")
{
	$_SESSION[$name] = $product;
}
else if($submit == "Delete")
{
	unset($_SESSION[$name]);
}

header('location: ViewCart.php');
?>