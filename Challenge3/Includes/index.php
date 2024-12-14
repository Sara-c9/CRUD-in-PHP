<?php include("nav.php");

require ("connect_db.php"); 

if(isset($_GET['message'])){
echo "<h4>".$_GET['message']."</h4>";
}

if(isset($_GET['insert_msg'])){
echo "<h4>".$_GET['insert_msg']."</h4>";
}

$query = "SELECT * FROM products";
$result = mysqli_query($link, $query);


if(mysqli_num_rows($result)>0) {

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

    echo 
        '<div class="row mt-5">
         <div class="col">
          <div class="d-flex justify-content-center align-items-center flex-wrap">
            <div class="card text-center" style="width: 18rem">
              <img src='. $row['item_img'].' class="card-img-top" alt="t-shirt" />
                <div class="card-body">
                  <h5 class="card-title">'.$row['item_name'].'</h5>
                  <p class="card-text">'. $row['item_desc'].'</p>
                  <p class="card-text"> &pound'.$row['item_price'].'</p>
                  <a class="btn btn-success btn-md btn-block" href="update.php?id='.$row['item_id'].'">Update</a>
                  <a class="btn btn-danger btn-md btn-block" href="delete.php?id='.$row['item_id'].'">Delete</a>
                </div>
                </div>
            </div>
          </div>
        </div>';
  }
}
  else { 
    echo '<p>There are currently no items in the table to display.</p>'; 
}

mysqli_close( $link); 

include("footer.php"); 

?>