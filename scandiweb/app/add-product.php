<?php include("path.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="../assets/sass/style.css">
    <link rel="icon" href="../assets/images/original.png">

    <title>Product List</title>
</head>

<body>
    <div class="whole-content">
        <div class="container">
            <div class="right">
                <a href="./index.php">
                    <button type="submit" form="product_form" name="Submit" id="savebtn" onClick="header('Location:index.php');">Save</button>
                </a>
                <a href="../index.php"> <button>Cancel</button> </a>
            </div>
            <div class="left">
                <p>Product List</p>
            </div>
        </div>
        <hr><br>

        <div id="msg"></div>

        <div class="container">
            <div class="whole-product_form">
                <div class="">
                    <form method="post" action="add.php" id="product_form" onsubmit="return validateMyForm(event);">
                        <label>SKU</label>
                        <input type="text" name="sku" id="sku"> <br><br>
                        <label>Name</label>
                        <input type="text" name="name" id="name"> <br><br>
                        <label>Price ($)</label>
                        <input type="number" name="price" id="price"> <br><br><br><br>
                        <code>please select option and insert required data</code> <br /><br /><br />
                        <label class="switcher">Type Switcher </label>
                        <select name="" id="productType" onchange="switcher();">
                            <option disabled>Type Switcher</option>
                            <option value=""></option>
                            <option value="DVD">DVD</option>
                            <option value="Furniture">Furniture</option>
                            <option value="Book">Book</option>
                        </select><br><br>
                        <!-- DVD -->
                        <div class="selectable" id="DVD">
                            <label> Size (MB) </label>
                            <input type="text" name="size" id="size"> <br><br>
                            <small>Please provide size in MB format.</small>
                        </div>
                        <div class="selectable" id="Furniture">
                            <!-- FURINTURE -->
                            <label> Height (CM) </label>
                            <input type="text" name="height" id="height"> <br><br>
                            <label> width (CM) </label>
                            <input type="text" name="width" id="width"> <br><br>
                            <label> Length (CM) </label>
                            <input type="text" name="length" id="length"> <br><br>
                            <small>Please provide dimensions in HxWxL format.</small>
                        </div>
                        <div class="selectable" id="Book">
                            <!-- BOOK -->
                            <label> Weight (KG) </label>
                            <input type="text" name="weight" id="weight"> <br><br>
                            <small>Please provide weight in Kg format.</small>
                        </div><br><br>


                    </form>
                </div> <br><br><br><br><br><br>
            </div>
        </div>
        <br>
        <hr>
        <div class="footer">
            <p>Scandiweb Test assigment</p>
        </div>
    </div>
    <script src="../assets/js/switcher.js"></script>
    <script src="../assets/js/validateMyForm.js"></script>
</body>

</html>