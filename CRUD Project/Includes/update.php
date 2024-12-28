<?php
include ( 'nav.php' ) ;

if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  require ('connect_db.php'); 

  $errors = array();

  if ( empty( $_POST[ 'item_id' ] ) )
  { $errors[] = 'Update item ID.' ; }
  else
  { $id = mysqli_real_escape_string( $link, trim( $_POST[ 'item_id' ] ) ) ; }
  
  if ( empty( $_POST[ 'item_name' ] ) )
  { $errors[] = 'Update item name.' ; }
  else
  { $n = mysqli_real_escape_string( $link, trim( $_POST[ 'item_name' ] ) ) ; }

  if (empty( $_POST[ 'item_desc' ] ) )
  { $errors[] = 'Update item description.' ; }
  else
  { $d = mysqli_real_escape_string( $link, trim( $_POST[ 'item_desc' ] ) ) ; }

  if (empty( $_POST[ 'item_img' ] ) )
  { $errors[] = 'Update image address.' ; }
  else
  { $img = mysqli_real_escape_string( $link, trim( $_POST[ 'item_img' ] ) ) ; }
  
  if (empty( $_POST[ 'item_price' ] ) )
  { $errors[] = 'Update item price.' ; }
  else
  { $p = mysqli_real_escape_string( $link, trim( $_POST[ 'item_price' ] ) ) ; }

  if ( empty( $errors ) ) 
  {
    $q = "UPDATE products SET item_id='$id',item_name='$n', item_desc='$d', item_img='$img', item_price='$p'  WHERE item_id='$id'";
    $r = @mysqli_query ( $link, $q ) ;
    if ($r)
    {
       header("Location: read.php");
    } else {
        echo "Error updating record: " . $link->error;
    }
     mysqli_close( $link );
    } 
  }
  ?>

<form action = "update.php" method="post">
    <label for ="item_id">Update Item ID</label>
    <input type="text" name="item_id" class="form-control" value="<?php if (isset($_POST['item_id'])) echo $_POST['item_id']; ?>">
    <label for ="item_name">Update Item Name</label>
    <input type="text" name="item_name" class="form-control" value="<?php if (isset($_POST['item_name'])) echo $_POST['item_name']; ?>">
    <label for ="item_desc">Update Item Description</label>
    <input type="text" name="item_desc" class="form-control" value="<?php if (isset($_POST['item_desc'])) echo $_POST['item_desc']; ?>">
    <label for ="item_img">Update Item Image</label>
    <input type="text" name="item_img" class="form-control" value="<?php if (isset($_POST['item_img'])) echo $_POST['item_img']; ?>">
    <label for ="item_price">Update Item Price</label>
    <input type="text" name="item_price" class="form-control" value="<?php if (isset($_POST['item_price'])) echo $_POST['item_price']; ?>">
    <input type="submit" value="Update Record">
</form>