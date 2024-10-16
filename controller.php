<?php
include 'conexao.php';  // Inclui a conexão com o banco de dados

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verifica se a requisição é POST (formulário foi submetido)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];  // Obtém o nome do formulário
    $email = $_POST['email'];  // Obtém o email do formulário
    $mensagem = $_POST['mensagem'];  // Obtém a mensagem do formulário
    
    // Insere um comentário temporariamente para obter o ID
    $sql = "INSERT INTO contato (nome, email, mensagem) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nome, $email, $mensagem);  // Atribui os valores para a consulta

    // Executa a inserção e obtém o ID da nova entrada
    if ($stmt->execute()) {
        $id = $stmt->insert_id;  // Obtém o ID da nova entrada
        echo "Comentário enviado com sucesso! ID do comentário: " . $id;
    } else {
        echo "Erro ao enviar o comentário: " . $stmt->error;
    }

    $stmt->close();
}

// Fecha a conexão com o banco de dados
$conn->close();

// Redireciona de volta para a página principal após o processamento
header("Location: index.php");
exit();
?>
