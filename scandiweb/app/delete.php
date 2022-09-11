<?php

include_once("./classes/Control.php");

$control = new Control();


$id = $control->escape_string($_GET['id']);


$result = $control->delete($id, 'products');

if ($result) {
	header("Location:index.php");
}
?>

