<?php
include('nav.php');
require('connect_db.php');

$q = "SELECT * FROM products;";
$r = mysqli_query ($link, $q);

if (@mysqli_num_rows($r) != 0) {
    echo '<h1>Read Records<h1>
    <table class="table">
    <thread>
    <tr><th>Product ID</th><th>Product Name</th><th>Description</th><th>Image</th><th>Price</th>';

    while ($row = mysqli_fetch_array($r,MYSQLI_ASSOC)) {
        echo'<tr>
        <td>'.$row['item_id'].'</td><td>'.$row['item_name'].'</td><td>'.$row['item_desc'].'</td><td><img src="'.$row['item_img'].'" alt="product" width="50" heigh="50"></td><td>&pound'.$row['item_price'].'</td><td>
        <a href="delete.php?item_id='.$row['item_id'].'">Delete</a>';
    }
}
?>