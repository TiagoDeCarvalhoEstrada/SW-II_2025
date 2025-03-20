<?php
$numeros = [5, 8, 12, 3, 7, 9, 4, 15, 6, 10];
$soma = 0;

foreach ($numeros as $numero) {
    $soma += $numero;
}

echo "A soma de todos os números é: $soma";
?>