<?php
require('connect_db.php');

if(isset($GET['item_id'])) {
    $item_id = $_GET['item_id'];
}

$sql = "DELETE FROM products WHERE item_id = '$item_id'";
if($link->query($sql) === TRUE) {
    header("location: index.php");
}
else {
    echo "Error deleting record: ". $link->error;
}