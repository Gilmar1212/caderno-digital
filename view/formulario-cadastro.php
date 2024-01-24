<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
</head>
<body>
    <form method="POST" action="../model/cadastro-usuario.php">
        <input type="text" name="usuario" placeholder="Insira seu usuário ou email" required>
        <input type="password" name="senha" placeholder="insira sua senha" required>
        <input type="password" name="repetir-senha" placeholder="confirme sua senha" required>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>