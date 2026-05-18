<?php
$num = $_POST['num'];
$suma = 0;
for ($i = 1; $i <= $num; $i++) {
    $suma = $i + $suma;
}
echo "El resultado de la suma de 1 hasta " . $num . " da como resultado " . $suma;
?>