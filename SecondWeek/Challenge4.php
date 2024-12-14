

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age</title>
</head>
<body>
    <?php
    $age = 52;
        if ($age < 13) {
            echo "<br>"."You are a child.";
        } elseif ($age >= 13 && $age <= 17) {
            echo "<br>"."You are a teenager.";
        } elseif ($age >= 18 && $age <= 64) {
            echo "<br>"."You are an adult.";
        } else {
            echo "<br>"."You are a senior citizen.";
        }
    ?> 
</body>
</html>
