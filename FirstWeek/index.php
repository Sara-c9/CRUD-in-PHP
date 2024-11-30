<!-- Challenge 1 -->

<?php
$width = 10;
$height = 5;
$area = $width * $height;
echo "The rectangle has a width of " .$width. " meters, a height of ". $height . " meters, and an area of " . $area . " square meters."
 ?>

<!-- Challenge 2 -->

<?php
$number1 = 10;
$number2 = 5;
$concatenate = $number1. "" .$number2;

echo "Addition of ". $number1 ." and ". $number2 ." is: ". $number1 + $number2 . "<br>";
echo "Subtraction of " . $number1 ." and ". $number2 ." is: ". $number1 - $number2 . "<br>";
echo "Multiplication of ". $number1 ." and ". $number2 ." is: ". $number1 * $number2 . "<br>";
echo "Division of ". $number1 ." and ". $number2 ." is: ". $number1 / $number2 . "<br>";
echo "Concatenation of ". $number1 ." and ". $number2 ." is: ". $concatenate . "<br>";

 ?>

<!-- Challenge 3 -->

<?php
$age = 25;
$days = $age * 365;
$hours = $days * 24;
$minutes = $hours * 60;

echo "Welcome to the Age Calculator!" . "<br>";
echo "Your age: " . $age ."<br>";
echo "You have been alive for: " . "<br>";
echo $days . " days" . "<br>";
echo $hours . " hours" . "<br>";
echo $minutes . " minutes" . "<br>";

 ?>

 <!-- Challenge 4 -->

 <?php
$dayWeek = array ('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
foreach( $dayWeek as $value ) 
{ echo " $value "  .'<br>'; }
?>

 <!-- Challenge 5 -->

 <?php 

$temperature = array('high_summer' => '19° C', 'low_summer'=> '11° C' ,'high_winter' => '7° C', 'low_winter' => '1° C');
$months = array ('July-Aug', 'Jan-Feb');

echo 'Average Temperature in Edinburgh' .'<br>';
echo 'Month' .'<br>';
echo $months [0] . '<br>' . 'High - ' . $temperature['high_summer'] . '  - Low - ' . $temperature['low_summer'] .'<br>';
echo $months [1] . '<br>' . 'High - ' . $temperature['high_winter'] . '  - Low - ' . $temperature['low_winter'] .'<br>'; 

?>
  
 <!-- Challenge 6 -->

 <?php
$student = array(
'Aarron' => array ('Physics'=> '74%',
'English' => '69%',
'Math' => '70%'),

'Jamie' => array ('Physics'=> '64%',
'English' => '79%',
'Math' => '69%'),

'Harry' => array ('Physics'=> '55%',
'English' => '52%',
'Math' => '57%'),);

echo 'Student Results'. '<br>' .
'Physics result for Aarron :' . $student['Aarron']['Physics'].'<br>'.
'English result for Jamie :' . $student['Jamie']['English'].'<br>'.
'Math result for Harry :' . $student['Harry']['Math'].'<br>';

?>