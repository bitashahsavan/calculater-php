<?php
include 'includes/calc.inc.php';
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$cal = $_POST['cal'];


$calculateor = new calc($num1  , $num2 ,$cal);

 echo $calculateor-> calcMethod();