<?php
$nombre = $_POST['nombre'];
$horas = $_POST['horas'];
$sueldo = $_POST['sueldo'];
$pago = $horas * $sueldo;
echo "<center>Estimado " . $nombre . ", usted trabajo " . $horas . " horas con un pago de $" . $sueldo . " dolares por hora y por eso su salario total es de $" . $pago . " dolares.</center>";
?>