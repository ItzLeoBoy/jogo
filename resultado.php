<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Jogo do Bicho</title>
</head>
<body>
    <h1>Resultado do Jogo do Bicho</h1>
    <?php
    $resultado = rand(1, 25);
    echo "<p>O número sorteado é: $resultado</p>";
    
    $apostas = file("apostas.txt");
    echo "<h2>Apostas:</h2>";
    foreach ($apostas as $aposta) {
        echo "<p>$aposta</p>";
    }
    
    echo "<h2>Ganhadores:</h2>";
    $ganhadores = array_filter($apostas, function($aposta) use ($resultado) {
        return strpos($aposta, "número " . $resultado) !== false;
    });
    
    if (empty($ganhadores)) {
        echo "<p>Ninguém acertou o número.</p>";
    } else {
        foreach ($ganhadores as $ganhador) {
            echo "<p>$ganhador</p>";
        }
    }
    ?>
    <br>
    <a href="index.php">Voltar</a>
</body>
</html>
