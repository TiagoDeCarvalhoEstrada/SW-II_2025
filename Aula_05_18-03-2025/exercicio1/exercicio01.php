<?php

$produto = array(

    "nome" => "mouse",
    "preco" => 100,
    "quantidade" => 20
);

$json1 = json_encode($produto);
file_put_contents("dados.json", $json1);

echo $json1;
?>