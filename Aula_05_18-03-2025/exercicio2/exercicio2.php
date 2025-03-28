<?php
// Criando um array de usuários
$usuarios = array(
    array("id" => 1, "nome" => "João Silva", "email" => "joao@email.com"),
    array("id" => 2, "nome" => "Maria Santos", "email" => "maria@email.com"),
    array("id" => 3, "nome" => "Carlos Souza", "email" => "carlos@email.com")
);

// Convertendo o array para JSON e salvando no arquivo usuarios.json
$jsonUsuarios = json_encode($usuarios, JSON_PRETTY_PRINT);
file_put_contents("usuarios.json", $jsonUsuarios);

echo "Arquivo JSON criado com sucesso!<br>";

// Lendo o arquivo JSON
$jsonData = file_get_contents("usuarios.json");

// Convertendo JSON para array PHP
$usuariosArray = json_decode($jsonData, true);

// Exibindo os dados
echo "Lista de Usuários";
foreach ($usuariosArray as $usuario) {
    echo "Nome: " . $usuario['nome'] . " - Email: " . $usuario['email'] . "<br>";
}
?>