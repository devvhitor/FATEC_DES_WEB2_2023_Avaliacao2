<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['nome'] === 'fatec' && $_POST['senha'] === 'portaria') {
        $_SESSION['online'] = true;
        $_SESSION['username'] = "Portaria Fatec";
        header('Location: principal.php');
        exit;
    } else {
        $_SESSION['online'] = false;
    }
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css">
    <style type="text/css">
        body {
            font: 14px sans-serif;
        }
        .wrapper {
            max-width: 350px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Acessar</h2>
        <p>Favor inserir login e senha.</p>
        <form action="index.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" value="fatec" id="nome">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" class="form-control" value="portaria" id="senha">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>
        </form>
    </div>
</body>
</html>