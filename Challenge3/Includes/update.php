<?php
    include("nav.php");

    if ($_SERVER['REQUEST_METHOD']== 'POST'){
        require('connect_db.php');

        $error = array();

    if (empty($_POST['item_id'])) {
        $error[] = 'Update item ID';
    } 
    else 
    { $item_id = mysqli_real_escape_string($link, trim($_POST['item_id']));
    }

    if (empty($_POST['item_name'])) {
        $error[] = 'Update item name';} 
    else 
    { $item_name = mysqli_real_escape_string($link, trim($_POST['item_name']));}

    if (empty($_POST['item_desc'])) {
        $error[] = 'Update item description';
    } 
    else 
    { $item_desc = mysqli_real_escape_string($link, trim($_POST['item_desc']));
    }
    if (empty($_POST['item_img'])) {
        $error[] = 'Update item image';
    } 
    else 
    { $item_img = mysqli_real_escape_string($link, trim($_POST['item_img']));
    }
    if (empty($_POST['item_price'])) {
        $error[] = 'Update item price';
    } 
    else {
        $item_price = mysqli_real_escape_string($link, trim($_POST['item_price']));
    }
    if (empty($error)) {
        $query = "UPDATE products SET item_id = '$item_id', item_name = '$item_name', item_desc = '$item_desc', item_img = '$item_img', item_price = '$item_price' WHERE item_id='$item_id'";
        $result = mysqli_query($link,$query);

    if ($result) {
        header("location:read.php");
    }
    else {
        echo "Error updating record:" . $link->error;
    }
    mysqli_close($link);
    exit();
    }
    else {
        echo '<script type="text/JavaScript">
        alert("';
        foreach($error as $msg)
        {echo "$msg";}
        echo 'Please try again")</script>';

        myqsli_close($link);
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