<?php
$nombre = $_POST['nombre'];
$prod = $_POST['prod'];
$cant = $_POST['cant'];
$precio = $_POST['precio'];
$subtotal = $cant * $precio;
$total = $subtotal;
echo "FACTURA ELECTRÓNICA<br>";
echo "---------------------------------<br>";
echo "Cliente: " . $nombre . "<br>";
echo "Producto: " . $prod . "<br>";
echo "Cantidad: " . $cant . "<br>";
echo "Precio Unitario: $" . $precio . "<br>";
echo "---------------------------------<br>";
echo "Subtotal: $" . $subtotal . "<br>";
echo "Total a Pagar: $" . $total . "<br>";
?>