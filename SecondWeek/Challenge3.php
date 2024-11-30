<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication table</title>
</head>
<body>

<form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method="get"> 
    Enter number: <input type = "number" value = "num" name ="number">
    <input type = "submit" value = "Calculate" name = "cal"><br>
</form> 
<?php
    if (isset($_GET["number"])) {
        $num = $_GET["number"];
    for ($i = 0; $i <= 10; $i++) 
    {
        echo "$num x $i = " . $num * $i . "<br>";
    }
}
?>
</body>
</html>