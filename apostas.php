<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $numero = $_POST["numero"];
    
    // Salvar a aposta em um arquivo ou banco de dados
    $aposta = $nome . " apostou no número " . $numero . "\n";
    file_put_contents("apostas.txt", $aposta, FILE_APPEND);
    
    echo "<h1>Aposta Registrada</h1>";
    echo "<p>Obrigado, $nome! Sua aposta no número $numero foi registrada.</p>";
    echo "<a href='index.php'>Voltar</a>";
}
?>