<?php

$control = new Control();

//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM products ORDER BY id DESC";
$result = $control->getData($query);

if (isset($_POST['remove'])) {
    @$checkbox = $_POST['delete_checkbox'];
    if (@count($checkbox) == 0) {
        die('please select checkboxes');
    }
    for ($i = 0; $i < count($checkbox); $i++) {
        $del_id = $checkbox[$i];
        $sql = "DELETE FROM products WHERE id='$del_id'";
        $result = mysqli_query($conn, $sql);
    }
    // if successful redirect to delete_multiple.php 
    if ($result) {
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
    }
}
?>