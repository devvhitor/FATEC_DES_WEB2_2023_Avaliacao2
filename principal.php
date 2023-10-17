<?php
require_once('header.php');
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Portaria Fatec</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css">
    <style type="text/css">
        body {
            font: 14px sans-serif;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        .page-title {
            margin: 20px 0;
        }
        .btn-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="page-title">
            <h1><?php echo $_SESSION["username"]; ?></h1>
        </div>
        <div class="btn-container">
            <a href="registros.php" class="btn btn-primary btn-block">Verificar Veículos</a>
            <a href="cadastro.php" class="btn btn-primary btn-block">Cadastro Veículos</a>
            <a href="logout.php" class="btn btn-danger btn-block">Sair da conta</a>
        </div>
    </div>
</body>
</html>