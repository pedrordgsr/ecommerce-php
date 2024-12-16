<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div style="justify-content:center; align-items:center; flex-direction:column ;display:flex; margin-top: 50px; ">
        <div class="card">
            <h2 style="font-weight:200">Cadastrar Produto</h2>

            <form action="insert.php" method="post">
                <label for="">Nome:</label>
                <input type="text" name="nome" required><br><br>

                <label for="">Preço:</label>
                <input type="number" name="preco" required><br><br>

                <div style="display:flex; justify-content:end;">
                    <button class="button" type="submit" value="Cadastrar">Cadastrar</button>
                </div>
                
            </form>

            
        </div>
        <p><a href="listar.php">Ver produtos cadastrados</a></p>
    </div>



</body>

</html>