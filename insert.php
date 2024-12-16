<?php

require_once 'config.php';

// Vericar se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar os dados do formulário
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];

    $db = new Database();
    $conn = $db->connect();

    // Preparando a query para inserir os dados
    $query = "INSERT INTO produtos (nome, preco) VALUES (:nome, :preco)";

    // Preparando declaração com o PDO
    $stmt = $conn->prepare($query);

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':preco', $preco);

    try {
        if ($stmt->execute()) {
            header('Location: listar.php');
        } else {
            echo "Erro ao cadastrar usuário.";
        }
    } catch (PDOException $ex) {
        echo "Erro: " . $ex->getMessage();
    }
}


?>