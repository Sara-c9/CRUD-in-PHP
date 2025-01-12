<?php
include('nav.php');

require('connection_db.php');

echo '<div class="row">';

$q = 'SELECT * FROM products';
$r = mysqli_query ($link,$q);

if (mysqli_num_rows ($r)>0) {
    while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)) {
echo

'<div class="card mt-3 mb-3 ml-3 mr-3" style="width: 18rem;">
  <img src="'. $row['item_img'].'" class="card-img-top" alt="watchImg">
  <div class="card-body">
    <h5 class="card-title">'. $row['item_name'].'</h5>
    <p class="card-text">'. $row['item_desc'].'</p>
    <p class="card-text">&pound '. $row['item_price'].'</p> 
    <a href="added.php?id='.$row['item_id'].'" class="btn btn-success btn-lg w-100">Add to Cart</a>
  </div>
</div>
';

}
mysqli_close($link);
}

else {echo '<p>There are currently no items in the table to display </p>';}

include('footer.php');
?>