<?php
$numeros = [10, 23, 45, 6, 78, 90, 33, 27, 14, 50, 61, 72, 88, 99, 5];

$pares = 0;
$impares = 0;

foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {
        $pares++; // Se for divisível por 2, é par
    } else {
        $impares++; // Se não for divisível por 2, é ímpar
    }
}

echo "Quantidade de números pares: $pares\n";
echo "Quantidade de números ímpares: $impares";
?>