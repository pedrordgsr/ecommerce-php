<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de E-Commerce</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <?php include 'navbar.php'; ?>
        <div style="text-align: center;">
            <h2>Bem-vindo ao Sistema de E-Commerce</h2>
            <div>
                <div style="display: flex; justify-content: center; align-items: center; gap:20px;">
                    <div class="card" style="width: 100px;">
                        <img src="img/cells.png" alt="" style="margin-top: 20px;" width="80px">
                        <a href="cadastrar.php">Cadastrar Produto</a>
                    </div>
                    <div class="card" style="width: 100px;">
                        <img src="img/folder.png" style="margin-top: 20px;" alt="" width="80px">
                        <a href="listar.php">Listar Produtos</a>
                    </div>
                </div>
            </div>
        </div>


    </div>

</body>

</html>