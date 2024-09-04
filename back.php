<?php
// Habilitar exibição de erros para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário com validação básica
    $nome = htmlspecialchars($_POST['nome'] ?? '');
    $data_nascimento = htmlspecialchars($_POST['data-nascimento'] ?? '');
    $idade = htmlspecialchars($_POST['idade'] ?? '');
    $estado = htmlspecialchars($_POST['estado'] ?? '');
    $cidade = htmlspecialchars($_POST['city'] ?? '');
    $endereco = htmlspecialchars($_POST['endereco'] ?? '');
    $telefone = htmlspecialchars($_POST['telefone'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');

    // Captura e valida os campos dinâmicos de formação
    $formacao = isset($_POST['formacao']) ? array_map('htmlspecialchars', $_POST['formacao']) : [];
    
    // Captura e valida os campos dinâmicos de experiência
    $experiencia = isset($_POST['experiencia']) ? array_map('htmlspecialchars', $_POST['experiencia']) : [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo de <?php echo $nome; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
        }
        h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #007BFF;
            text-align: center;
        }
        p {
            margin: 10px 0;
            font-size: 1.1rem;
        }
        strong {
            color: #555;
        }
        h2 {
            font-size: 1.5rem;
            margin-top: 30px;
            margin-bottom: 15px;
            color: #333;
            border-bottom: 2px solid #007BFF;
            padding-bottom: 5px;
        }
        ul {
            list-style-type: disc;
            padding-left: 20px;
        }
        li {
            margin: 5px 0;
        }
        button {
            display: block;
            margin: 20px auto 0;
            padding: 10px 20px;
            font-size: 1rem;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Currículo de <?php echo $nome; ?></h1>

        <p><strong>Nome:</strong> <?php echo $nome; ?></p>
        <p><strong>Data de Nascimento:</strong> <?php echo $data_nascimento; ?></p>
        <p><strong>Idade:</strong> <?php echo $idade; ?></p>
        <p><strong>Estado:</strong> <?php echo $estado; ?></p>
        <p><strong>Cidade:</strong> <?php echo $cidade; ?></p>
        <p><strong>Endereço:</strong> <?php echo $endereco; ?></p>
        <p><strong>Telefone:</strong> <?php echo $telefone; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>

        <h2>Formação Acadêmica</h2>
        <ul>
            <?php
            if (!empty($formacao)) {
                foreach ($formacao as $curso) {
                    echo "<li>" . htmlspecialchars($curso) . "</li>";
                }
            } else {
                echo "<li>Nenhuma formação acadêmica registrada.</li>";
            }
            ?>
        </ul>

        <h2>Experiência Profissional</h2>
        <ul>
            <?php
            if (!empty($experiencia)) {
                foreach ($experiencia as $exp) {
                    echo "<li>" . htmlspecialchars($exp) . "</li>";
                }
            } else {
                echo "<li>Nenhuma experiência profissional registrada.</li>";
            }
            ?>
        </ul>

        <button onclick="window.print()">Imprimir ou Baixar</button>
    </div>
</body>
</html>
