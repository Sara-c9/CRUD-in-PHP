<?php require("connect_db.php");?>
<?php
if(isset($_POST['submit'])){

    $item_name = $_POST['item_name'];
    $item_desc = $_POST['item_desc'];
    $item_img = $_POST['item_img'];
    $item_price = $_POST['item_price'];

}

if($item_name == "" || empty($item_name)){
    header('location:index.php?message=Insert Item Name!');
}
else {
    $query = "INSERT INTO products (item_name, item_desc, item_img, item_price) 
	VALUES ('$item_name','$item_desc', '$item_img', '$item_price' )";
    $result = mysqli_query($link,$query);

    if(!$result){
        die("Query Failed!".mysqli_error());
    }

    else {
        header('location:index.php?insert_msg=Data added successfully!');
    }
}