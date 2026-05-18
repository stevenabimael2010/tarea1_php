<?php
$num = $_POST['num'];
$residuo = $num % 2;
if ($residuo == 0) {
    echo "El numero es par";
} else {
    echo "El numero es impar";
}
?>