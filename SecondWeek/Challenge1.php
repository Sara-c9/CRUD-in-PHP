<!-- Create a PHP function that takes in a string as an argument and returns the string with all vowels replaced with the character "x" -->

<?php

function replaceVowelsWithX ($str){
    $value = array("a","e","i","o","u","A","E","I","O","U");
    $replace = str_replace($value,"x",$str);
    return $replace;
}

echo replaceVowelsWithX("Hello World!");
?>