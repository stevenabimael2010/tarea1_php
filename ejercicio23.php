<?php
$precio = $_POST['precio'];
$total = $precio * 1.13;
echo "El precio original es: $" . $precio . "<br>";
echo "El total con IVA incluido es: $" . $total;
?>