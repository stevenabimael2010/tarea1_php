<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
if ($num1 > $num2) {
    echo $num1 . "es mayor que " . $num2;
} else {
    echo $num2 . "es mayor que " . $num1;
}
?>