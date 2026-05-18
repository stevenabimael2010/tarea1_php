<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
if ($num1 > $num2) {
    echo $num2 . "es menor que " . $num1;
} else {
    echo $num1 . "es menor que " . $num2;
}
?>