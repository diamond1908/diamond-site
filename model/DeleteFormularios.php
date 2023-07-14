<?php
require_once("./model/Formulario.php");
require_once './dao/FormularioDao.php';

// Estabelecer a conexão com o banco de dados
$conn = new PDO("mysql:host=localhost;dbname=sitediamond", "root", "");

// Verificar se ocorreu algum erro na conexão
if (!$conn) {
    die('Erro ao conectar com o banco de dados.');
}

// Montar a consulta SQL para executar o DELETE
$query = "DELETE FROM formulario WHERE id = :id";

// Verificar se a chave 'idFormulario' está definida no array $_GET
if (isset($_GET['idFormulario'])) {
    // Definir o ID do registro que será excluído
    $id = $_GET['idFormulario'];
    
    // Preparar a consulta
    $stmt = $conn->prepare($query);

    // Associar o valor do ID ao parâmetro da consulta
    $stmt->bindValue(':id', $id);

    // Executar a consulta
    $result = $stmt->execute();

    // Verificar se a consulta foi executada com sucesso
    if ($result) {
        echo 'Registro excluído com sucesso.';
    } else {
        echo 'Erro ao excluir o registro.';
    }
} else {
    echo 'ID do formulário não especificado.';
}
