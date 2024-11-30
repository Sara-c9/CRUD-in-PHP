<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
<?php

// Check if variable is set and not null 
if(isset($_POST['operator'])) {

    // If above is true, get the values from the input fiels
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];


    // Switch to perform operation based on the chosen operator 
switch ($operator) {
    case "+":
        $result = $num1 + $num2;
        break;
    case "-":
        $result = $num1 - $num2;
        break;
    case "*":
        $result = $num1 * $num2;
        break;
    case "/":

        // If num2 is zero display an error message

        if ($num2 == 0) {
            $result = "Error: Cannot divide by zero";
        } else {
            $result = $num1 / $num2;
        }
        break;
    default:
        $result = "Invalid";
    }
}
?> 
<form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
     First Number : <input type="number" name = "num1" required><br>
     Second Number : <input type="number" name = "num2" required><br>
     <input type="submit" value ="+" name = "operator">
     <input type="submit" value ="-" name = "operator">
     <input type="submit" value ="*" name = "operator">
     <input type="submit" value ="/" name = "operator"><br>
     Result : <input type="text" value="<?php if (isset($result)) { echo $result;} ?>" disabled>
</form>  
</body>
</html>