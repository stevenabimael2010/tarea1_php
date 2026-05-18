<?php
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$prom = ($nota1 + $nota2 + $nota3) / 3;
echo "Su promedio es: " . $prom;
if ($prom >= 6) {
    echo ", usted aprobo.";
} else {
    echo ", usted reprobo.":
}
?>