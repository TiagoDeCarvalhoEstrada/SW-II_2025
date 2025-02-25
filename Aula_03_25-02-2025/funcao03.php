<?php
//Função sem parâmetros e com retorno

function msg(){
    $a = "Tiago";
    return $a;
}

$frase = "Olá, ";
$frase .= msg();
$frase .= ", bem-vindo!";

echo $frase;
?>