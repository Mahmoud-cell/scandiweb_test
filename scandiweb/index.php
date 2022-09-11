<?php
include("./app/path.php");
include_once("./app/classes/Control.php");
include_once("./app/includes/index-control.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="./assets/sass/style.css">
    <link rel="icon" href="./assets/images/original.png">

    <title>Product List</title>
</head>

<body>
    <div class="whole-content">
        <div class="container">
            <div class="right">
                <a href="./app/add-product.php"> <button type="submit">ADD</button> </a>
                <a onClick="return confirm('Are you sure you want to delete?')"><button type="submit" form="product_card" name="remove" id="delete-product-btn" onClick="mass_delete_fun()">MASS DELETE</button></a>

            </div>
            <div class="left">
                <p>Product List</p>
            </div>
        </div>
        <hr><br>
        <div class="container">
            <div class="whole-check-boxs">



                <form method="post" action="index.php" id="product_card">
                    <!-- show data using foreach [way to iterate over arrays] -->
                    <?php foreach (@$result as $key => $res) {

                        echo " <div class='Checkboxes'> 
                    <label>
                        <input type='checkbox' class='delete-checkbox' name='delete_checkbox[]' value='" . $res['id'] . "'>
                        <span class='checkmark'></span>
                    </label>
                    <label>" . $res['sku'] . " </label>";
                        echo "<label>" . $res['name'] . "</label>";
                        echo "<label>" . $res['price'] . " $ </label>";
                        if ($res['size'] !== "") {
                            echo " <label> Size: " . $res['size'] . " MB </label>";
                        } else if ($res['weight'] !== "") {
                            echo " <label> Weight: " . $res['weight'] . " KG </label>";
                        } else {
                            echo " <label> Dimensions: " . $res['dimension'] . "</label>";
                        }
                        echo "</div>";
                    } ?>
                </form>
            </div>
        </div>
        <br>
        <hr>
        <div class="footer">
            <p>Scandiweb Test assigment</p>
        </div>
    </div>
    <script src="./assets/js/script.js"></script>

</body>

</html>