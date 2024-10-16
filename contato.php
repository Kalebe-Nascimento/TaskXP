<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "taskxp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("falha na conexão com o servidos: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados enviados pelo formulário
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $mensagem = $_POST['mensagem'];

    // Proteção contra SQL Injection
    $email = $conn->real_escape_string($email);
    $nome = $conn->real_escape_string($nome);
    $mensagem = $conn->real_escape_string($mensagem);

    // Cria a query de inserção no banco de dados
    $sql = "INSERT INTO contato (email, nome, mensagem) VALUES ('$email', '$nome', '$mensagem')";

    // Executa a query e verifica se foi inserido com sucesso
    if ($conn->query($sql) === TRUE) {
      header("Location: index.php");
      exit();
    } else {
        echo "Erro ao enviar mensagem: " . $conn->error;
    }

    // Fecha a conexão
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contato - TaskXP</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;400;600&family=Montserrat:wght@700&display=swap"
      rel="stylesheet"
    />
</head>
<body class="contato-page">
    <!-- Cabeçalho -->
    <header>
        <figure>
            <img src="./assets/logo.png" alt="Logo TaskXP" class="logo" />
        </figure>
        <nav class="menu">
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="cadastrar-se.html">Cadastrar-se</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
        </nav>
    </header>

    <!-- Corpo -->
    <main>
        <form action="contato.php" method="POST" class="topic fade-ins" id="contato-form">
            <h1>Entrar em Contato</h1>

            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" placeholder="Digite seu email" required />
            </div>

            <div class="form-group">
                <label for="nome">Nome</label>
                <input id="nome" type="text" name="nome" placeholder="Digite o seu nome" required />
            </div>

            <div class="form-group">
                <label for="mensagem">Mensagem</label>
                <textarea id="mensagem" name="mensagem" placeholder="Sua mensagem aqui" rows="5" cols="33" required></textarea>
            </div>

            <button type="submit">Enviar</button>
        </form>
    </main>

    <!-- Rodapé -->
    <footer>
        <div>
            <p>Razão Social: TaskXP LTDA - CNPJ: 00.000.000/0001-00</p>
        </div>

        <p>© <time>2024</time> - Todos direitos reservados a TaskXP</p>
    </footer>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
    <script src="script-ctt.js"></script>
</body>
</html>
