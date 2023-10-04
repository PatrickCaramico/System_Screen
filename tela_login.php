<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style_login.css">
    <link rel="stylesheet" href="./css/btnVoltar.css">
    <title>Tela de login</title>
</head>
<body>
<button id="btnVoltar" onclick="window.location.href = 'home.php';">Voltar</button>
    <div>
        <h1>Login</h1>
        <form action="testlogin.php" method="post">
            <input type="text" name="email" placeholder="email">
            <br><br>
            <input type="password" name="senha" placeholder="senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>