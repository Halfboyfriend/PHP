<?php

//print_r($_GET);
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$sum = $num1 + $num2; 

$diff = $num1 - $num2;



echo "Sum: " . $sum . "<br>";
echo "Diff: " . $diff . "<br>";