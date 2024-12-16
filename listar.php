<?php

require_once 'config.php';

// Criando instância da classe Database
$db = new Database();
$conn = $db->connect(); // Obtendo conexão com BD

// Criando a consulta para recuperar todos os usuários
$query = "SELECT id, nome, preco FROM produtos";

// Preparando a declaração (stmt) com a conexão (PDO)
$stmt = $conn->prepare($query);

// Executa a consulta (resultados ficam armazenados
// dentro do objeto $stmt)
$stmt->execute();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de usuários</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div style="flex-direction:column; display:flex; justify-content:center; align-items:center; margin-top: 50px;">
        <div class="card">
            <h2 style="font-weight:200">Produtos Cadastrados</h2>
            <table class="styled-table">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Ação</th>
                </thead>
                <tbody>
                    <?php while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                        <tr>
                            <td> <?= $linha['id'] ?> </td>
                            <td> <?= $linha['nome'] ?> </td>
                            <td> <?= $linha['preco'] ?> </td>
                            <td> <a href="delete.php?id=<?= $linha['id'] ?>">Excluir</a></td>
                        </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
            <div style="display:flex; justify-content:end;">
                <a class="button" href="javascript:history.back()">Voltar</a>
            </div>
            
        </div>
        
    </div>


    <!-- Link para voltar ao cadastro de usuarios-->
    
</body>

</html>