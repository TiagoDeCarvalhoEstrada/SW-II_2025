<?php
$pessoa = [
    "nome" => "João",
    "idade" => 25,
    "cidade" => "São Paulo"
];

$pessoa["profissao"] = "Desenvolvedor";

$amigos = ["Carlos", "Mariana", "Fernando"];

$dados = [
    "pessoa" => $pessoa,
    "amigos" => $amigos
];

print_r($dados);
?>