<?php
// CABECALHO
header("Content-Type: application/json; charset=UTF-8"); // DEFINE O TIPO DE RESPOSTA
$metodo = $_SERVER["REQUEST_METHOD"];
// ARQUIVO JSON
$arquivo = 'usuarios.json';
// VERIFICA SE O ARQUIVO EXISTE
if (!file_exists($arquivo)) {
    file_put_contents($arquivo, json_encode([], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}
// LÊ O CONTEÚDO DO ARQUIVO
$usuarios = json_decode(file_get_contents($arquivo), true);
// SWITCH DOS MÉTODOS
switch ($metodo) {
    case 'GET':
        // Buscar por ID
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            $usuario_encontrado = null;
            foreach ($usuarios as $usuario) {
                if ($usuario["id"] == $id) {
                    $usuario_encontrado = $usuario;
                    break;
                }
            }
            if ($usuario_encontrado) {
                echo json_encode($usuario_encontrado, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            } else {
                http_response_code(404);
                echo json_encode(["erro" => "Usuário não encontrado."], JSON_UNESCAPED_UNICODE);
            }
        } else {
            // Listar todos
            echo json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        }
        break;
    case 'POST':
        $dados = json_decode(file_get_contents('php://input'), true);
        // Verifica campos obrigatórios
        if (!isset($dados["nome"]) || !isset($dados["email"])) {
            http_response_code(400);
            echo json_encode(["erro" => "Nome e email são obrigatórios."], JSON_UNESCAPED_UNICODE);
            exit;
        }
        // Gera novo ID
        $novo_id = 1;
        if (!empty($usuarios)) {
            $ids = array_column($usuarios, 'id');
            $novo_id = max($ids) + 1;
        }
        $novo_usuario = [
            "id" => $novo_id,
            "nome" => $dados["nome"],
            "email" => $dados["email"]
        ];
        // Salva usuário
        $usuarios[] = $novo_usuario;
        file_put_contents($arquivo, json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        // Retorna confirmação
        echo json_encode([
            "mensagem" => "Usuário inserido com sucesso!",
            "usuario" => $novo_usuario
        ], JSON_UNESCAPED_UNICODE);
        break;
    default:
        http_response_code(405);
        echo json_encode(["erro" => "Método não permitido!"], JSON_UNESCAPED_UNICODE);
        break;
}
?>