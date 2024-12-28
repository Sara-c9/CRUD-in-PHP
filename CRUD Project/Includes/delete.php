<?php
require('connect_db.php');

if (isset($_GET['item_id'])) {
    $id = $_GET['item_id'];
}

$q = "DELETE FROM products WHERE item_id='$id'";
if ($link->query($q) === TRUE) {
    header("Location: read.php");
} else {
    echo "Error deleting record: " . $link->error;
}
?>
