<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    
require("connect_db.php");

if(isset($_POST['submit'])){

    $item_name = $_POST['item_name'];
    $item_desc = $_POST['item_desc'];
    $item_img = $_POST['item_img'];
    $item_price = $_POST['item_price'];

}

if($item_name == "" || empty($item_name)){
    header('location:create.php?message=Insert item name!');
}

else if($item_desc == "" || empty($item_desc)){
    header('location:index.php?message=Insert item description!');
}

else if($item_img == "" || empty($item_img)){
    header('location:index.php?message=Insert item image!');
}

else if($item_price == "" || empty($item_price)){
    header('location:index.php?message=Insert item price!');
}

else {
    $query = "INSERT INTO products (item_name, item_desc, item_img, item_price) 
	VALUES ('$item_name','$item_desc', '$item_img', '$item_price' )";
    $result = mysqli_query($link,$query);

    if($result){
        echo '<p>New record created successfully</p>';
    }

    mysqli_close($link);
    exit();
}
}