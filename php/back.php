<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = htmlspecialchars($_POST['nome']);
    $dataNascimento = htmlspecialchars($_POST['data-nascimento']);
    $experiencias = $_POST['experiencia'];

    echo "<!DOCTYPE html>";
    echo "<html lang='pt-br'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Currículo de $nome</title>";
    echo "<link rel='stylesheet' href='../vendor/bootstrap/css/bootstrap.min.css'>";
    echo "<style>";
    echo "body { padding: 20px; }";
    echo "</style>";
    echo "</head>";
    echo "<body>";
    echo "<div class='container'>";
    echo "<h1 class='text-center'>Currículo de $nome</h1>";
    echo "<p><strong>Data de Nascimento:</strong> $dataNascimento</p>";
    echo "<p><strong>Idade:</strong> $idade</p>";
    echo "<h3>Experiências Profissionais:</h3>";
    echo "<ul>";

    if (!empty($experiencias)) {
        foreach ($experiencias as $experiencia) {
            if (!empty($experiencia)) {
                echo "<li>" . htmlspecialchars($experiencia) . "</li>";
            }
        }
    }

    echo "</ul>";
    echo "<button class='btn btn-primary' onclick='window.print();'>Imprimir Currículo</button>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
} else {
    echo "Método de requisição inválido.";
}
?>
