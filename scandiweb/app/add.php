
<?php

include_once("./classes/Control.php");
include_once("./classes/MainProduct.php");
$control = new Control();
$validation = new Validation();

if (isset($_POST['Submit'])) {
	$sku = $control->escape_string($_POST['sku']);
	$name = $control->escape_string($_POST['name']);
	$price = $control->escape_string($_POST['price']);
	$size = $control->escape_string($_POST['size']);
	$weight = $control->escape_string($_POST['weight']);
	$height = $control->escape_string($_POST['height']);
	$width = $control->escape_string($_POST['width']);
	$length = $control->escape_string($_POST['length']);
	$dimension = $height . " x " . $width . " x " . $length;
    
	/* check empty (sku, name, price) using validation class methods [check_empty] */
	$msg = $validation->check_empty($_POST, array('sku', 'name', 'price'));

	/* check Uniqe (sku) */
	$sku_result = mysqli_query($conn, "SELECT sku from products WHERE sku='" . $sku . "' ");
	if (mysqli_num_rows($sku_result) != 0) {
		die("sku already exists <br>");
	}
	/* Insert data if no problem using class Control methods [execute] */
	if ($msg != null) {
		echo $msg;
	} else {
		$result = $control->execute("INSERT INTO products (sku,name,price,size,weight,dimension) VALUES('$sku','$name','$price','$size','$weight','$dimension')");

		echo "<div class='alert alert-success text-center' role='alert'>Product added successfully.<br><br><a class='btn btn-info' href='../index.php'>View Product List</a></div>";
		//header('Location:index.php');
	}
}

?>
