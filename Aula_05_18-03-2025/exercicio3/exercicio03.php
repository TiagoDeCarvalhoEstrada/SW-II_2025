<?php
$jsonData = file_get_contents("dados.json");

$produtos = json_decode($jsonData, true);

$novoProduto = ["nome" => "Headset", "preco" => 200, "quantidade" => 10];
$produtos[] = $novoProduto;

file_put_contents("dados.json", json_encode($produtos, JSON_PRETTY_PRINT));

echo "Novo produto adicionado com sucesso!";
?>