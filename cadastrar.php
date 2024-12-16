<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <h2>Inserir dados de Produto</h2>
    <form action="insert.php" method="post">
        <label for="">Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label for="">Preço:</label>
        <input type="number" name="preco" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>

    <p><a href="listar.php">Produtos cadastrados</a></p>
</body>
</html>