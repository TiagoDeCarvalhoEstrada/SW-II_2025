<?php
$alunos = [
    "Ana" => 8.5,
    "Bruno" => 7.2,
    "Carlos" => 9.0,
    "Daniela" => 6.8,
    "Eduardo" => 7.5
];

$soma = 0;
$totalAlunos = count($alunos);

foreach ($alunos as $nota) {
    $soma += $nota; // Soma todas as notas
}

$media = $soma / $totalAlunos; // Calcula a média

echo "A média das notas é: " . number_format($media, 2);
?>