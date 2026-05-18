<?php
$celsius = $_POST['celsius'];
$fahr = ($celsius * 9/5) + 32;
echo "Los grados Celsius que ingreso convertidos a grados Fahrenheit son " . $fahr . "°F";
?>