<?php
$valor=15;
// Condicionales
if ($valor<10) {
    echo 'es menor a 10';
}else {
    echo 'es mayor a 10';
}
// Condicional de simbolo Ternario
echo "<br>";
echo $valor<10 ? 'es menor a 10':'es mayor a 10';
echo "<br>";
// Null coallescing
echo $gahal ?? 'No existe Valor Gahal';
?>