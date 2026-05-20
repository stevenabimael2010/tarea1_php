<?php
$edad_actual = $_POST['edad'];
$edad_futura = $edad_actual + 10;
echo "Tu edad actual es: " . $edad_actual . " años.<br>";
echo "Dentro de 10 años tendrás: " . $edad_futura . " años.";
?>