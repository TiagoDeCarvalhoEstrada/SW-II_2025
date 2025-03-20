<?php
$numeros = [25, 8, 14, 32, 5, 19, 42, 7]; // Array com 8 números inteiros

$maior = $numeros[0];
$menor = $numeros[0];

foreach ($numeros as $numero) {
    if ($numero > $maior) {
        $maior = $numero;
    }
    if ($numero < $menor) {
        $menor = $numero;
    }
}

echo "O maior número é: $maior\n";
echo "O menor número é: $menor";
?>