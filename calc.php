<?php
declare(strict_types=1);

include_once 'includes/calc.inc.php';

$num1 = (int)$_POST['num1'];
$num2 = (int)$_POST['num2'];
$cal = $_POST['cal'];

$calculator = new Calc($num1, $num2, $cal);



$query = array(
    'result' => $calculator->operations(),
    'num1' => $num1,
    'num2' => $num2,
    'cal' => $cal
);

$query = http_build_query($query);
header("Location: index.php?$query");