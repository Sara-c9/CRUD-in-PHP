<?php
include('nav.php');
require('connect_db.php');

$query = "SELECT * FROM products;";
$result = mysqli_query ($link, $query);

if (@mysqli_num_rows($result) != 0) {
    echo '<h1>Read Records<h1>
    <table class="table">
    <thread>
    <tr><th>Product ID</th><th>Product Name</th><th>Description</th><th>Image</th><th>Price</th>';

    while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
        echo'<tr>
        <td>'.$row['item_id'].'</td><td>'.$row['item_name'].'</td><td>'.$row['item_desc'].'</td><td><img src="'.$row['item_img'].'" alt="product" width="50" heigh="50"></td><td>&pound'.$row['item_price'].'</td><td>';
    }
    echo'</tr><table><br><br><a href="create.php">Add Records  </a><a href="read.php">Read Records  </a><a href="update.php">Update Records  </a> <a href="delete.php">Delete Records</a>';
}

mysqli_close($link);
exit();
?>