<?php
//Função sem parâmetros e com retorno

function msg($x){
    $a = "Tiago" . $x;
    return $a;
}

$frase = "Olá, ";
$frase .= msg(" Estrada");
$frase .= ", bem-vindo!";

echo $frase;
?>