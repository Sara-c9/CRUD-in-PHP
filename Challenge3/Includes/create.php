<?php include("nav.php"); ?>
<?php require("connect_db.php");


?>
<div class="row">
        <h2>Submit Form</h2><br><br>
        <form action="process_form.php" method="post">
            <label for ="item_name">Item Name: </label>
            <input type ="text" name = "item_name"
            value="<?php if (isset($_POST['item_name'])) echo $_POST['item_name']; ?>"><br><br>
            <label for ="item_desc">Item Description: </label>
            <textarea name = "item_desc" rows="4"
            value="<?php if (isset($_POST['item_desc'])) echo $_POST['item_desc']; ?>"></textarea><br><br>
            <label for ="item_img">Image: </label>
            <input type ="text" name = "item_img"
            value="<?php if (isset($_POST['item_img'])) echo $_POST['item_img']; ?>"><br><br>
            <label for ="item_price">Price: </label>
            <input type ="number" name = "item_price" 
            value="<?php if (isset($_POST['item_price'])) echo $_POST['item_price']; ?>"><br><br>

            <input type = "submit" name ="submit" value="Submit">
        </form>
    </div>
<?php include("footer.php"); ?>