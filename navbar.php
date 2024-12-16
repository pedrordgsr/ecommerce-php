<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .navbar{
            background: #53139f;
            color:white;
            display:flex;
            border-end-start-radius: 10px;
            border-end-end-radius: 10px;
            box-shadow:1px -5px 12px 3px #3f2571;
        }
        .navbar a{
            color:white;
            padding: 14px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-weight: normal;
        }

    </style>
</head>

    <div class="navbar">
        <a style="font-weight:bold;" href="index.php">E-Commerce do Pedro</a>
        <div>
            <a href="cadastrar.php">Cadastrar Produto</a>
            <a href="listar.php">Listar Produtos</a>
        </div>
        
    </div>
