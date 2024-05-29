<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario.css">
    <link rel="shortcut icon" href="css/favicon.svg" type="image/x-icon">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <form action="cadastrar.php" method="post">
        <h2>Cadastro de Usuário</h2>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        
        <button type="submit">Cadastrar</button>
    </form>
</html>
