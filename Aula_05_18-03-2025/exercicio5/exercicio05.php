<?php

$jsonData = file_get_contents("dados.json");

$produtos = json_decode($jsonData, true);
if (!is_array($produtos)) {
    die("Erro: O arquivo JSON está corrompido ou mal formatado.");
}

$nomeRemover = $_GET['nome'] ?? "Mouse";

$produtos = array_values(array_filter($produtos, fn($p) => isset($p['nome']) && $p['nome'] !== $nomeRemover));

file_put_contents("dados.json", json_encode($produtos, JSON_PRETTY_PRINT));

echo "Produto removido com sucesso!";
?>