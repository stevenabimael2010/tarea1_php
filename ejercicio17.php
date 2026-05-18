<?php
$monto = $_POST['monto'];
if ($monto > 67) {
    $descuento = $monto * 0.10;
    $montof = $monto - $descuento;
    echo "Usted aplico a un descuento del 10%, por lo tanto el total a pagar sera de $" . $montof . " dolares";
} else {
    echo "Usted no aplico para el descuento, por lo tanto el total a pagar sera el mismo.";
}
?>