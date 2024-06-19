<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Jogo do Bicho</title>
</head>
<body>
    <h1>Jogo do Bicho</h1>
    <form action="apostas.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="numero">Escolha um número (1-25):</label>
        <input type="number" id="numero" name="numero" min="1" max="25" required><br><br>
        
        <button type="submit">Fazer Aposta</button>
    </form>
</body>
</html>