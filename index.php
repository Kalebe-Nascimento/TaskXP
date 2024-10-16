<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "taskxp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o servidor: " . $conn->connect_error);
}

// Consulta para buscar as mensagens de contato
$sql = "SELECT nome, mensagem FROM contato";
$result = $conn->query($sql);

$avaliacoes = []; 
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $avaliacoes[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TaskXP</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;400;600&family=Montserrat:wght@700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
  </head>
  <body class="inicio-page">
    <!-- Cabeçalho -->
    <header>
      <figure>
        <img src="./assets/logo.png" alt="Logo TaskXP" class="logo" />
      </figure>
      <nav class="menu">
        <ul>
          <li>
            <a href="index.php">Início</a>
          </li>
          <li>
            <a href="cadastrar-se.php">Cadastrar-se</a>
          </li>
          <li>
            <a href="contato.php">Contato</a>
          </li>
        </ul>
      </nav>
    </header>

    <!-- Corpo -->
    <main class="topic fade-in">
      <section class="topic">
        <h1>Missão</h1>
        <p>
          No TaskXP, nossa missão é transformar a maneira como você organiza
          suas tarefas diárias, utilizando gamificação para incentivar e motivar
          a produtividade. Nosso objetivo é proporcionar uma experiência
          divertida e eficiente, tornando suas tarefas mais leves e organizadas.
        </p>
      </section>

      <section class="topic">
        <h1>Objetivos</h1>
        <ol>
          <li>
            <strong>Gamificação para Motivação:</strong> Usamos elementos de
            gamificação para transformar a organização de tarefas em algo
            prazeroso, incentivando a conclusão de metas pessoais e
            profissionais.
          </li>
          <li>
            <strong>Personalização Total:</strong> Ao completar suas tarefas,
            você recebe TaskCoins para personalizar o ambiente, com personagens
            e cenários únicos.
          </li>
          <li>
            <strong>Interface Intuitiva:</strong> O TaskXP foi desenvolvido para
            ser fácil de usar, oferecendo uma interface amigável que se adapta a
            qualquer tipo de usuário.
          </li>
          <li>
            <strong>Conectividade:</strong> Organize suas tarefas, acompanhe seu
            progresso e compartilhe suas realizações com amigos ou colegas.
          </li>
        </ol>
      </section>

      <section class="topic">
        <h1>Sobre o Sistema</h1>
        <p>
          O TaskXP é uma plataforma inovadora de gerenciamento de tarefas que
          utiliza técnicas de gamificação para incentivar os usuários a
          completarem suas atividades diárias de maneira divertida e produtiva.
          Com a personalização de cenários e personagens, você pode transformar
          seu ambiente virtual enquanto atinge seus objetivos.
        </p>
      </section>

      <!-- Nova seção para as telas do projeto -->
      <section class="topic" id="project-screens">
        <h1>Telas do Projeto</h1>
        <div class="screens-container">
          <!-- Imagens das telas vão aqui -->
          <!-- Novas telas do projeto -->
          <div class="screen-item">
            <div class="image-card">
              <h2 class="image-title">Tela de Login</h2>
              <img src="assets/screens/login.jpeg" alt="Tela de Login" />
            </div>
            <p>
              Permite que os usuários façam login e acessem suas contas com
              segurança.
            </p>
          </div>
          <div class="screen-item">
            <div class="image-card">
              <h2 class="image-title">Recuperação de Senha</h2>
              <img
                src="assets/screens/recuperar_senha.jpeg"
                alt="Tela de Recuperação de Senha"
              />
            </div>
            <p>
              Tela onde o usuário pode solicitar a redefinição de senha caso
              esqueça suas credenciais.
            </p>
          </div>
          <div class="screen-item">
            <div class="image-card">
              <h2 class="image-title">Loja de Personalização</h2>
              <img src="assets/screens/loja.jpeg" alt="Tela da Loja" />
            </div>
            <p>
              Aqui os usuários podem usar TaskCoins para comprar personalizações
              e melhorar a experiência com a gamificação.
            </p>
          </div>
          <div class="screen-item">
            <div class="image-card">
              <h2 class="image-title">Painel de Progresso</h2>
              <img
                src="assets/screens/painel_progresso.jpeg"
                alt="Painel de Progresso"
              />
            </div>
            <p>
              Os usuários podem acompanhar o progresso de suas tasks,
              visualizando os percentuais de conclusão e progresso.
            </p>
          </div>
          <div class="screen-item">
            <div class="image-card">
              <h2 class="image-title">Perfil do Usuário</h2>
              <img src="assets/screens/perfil.jpeg" alt="Tela de Perfil" />
            </div>
            <p>
              Exibe informações sobre o usuário e permite ajustar configurações
              como o modo escuro e convite para amigos.
            </p>
          </div>
          <div class="screen-item">
            <div class="image-card">
              <h2 class="image-title">Tela de Tasks</h2>
              <img src="assets/screens/tasks.jpeg" alt="Tela de Tasks" />
            </div>
            <p>
              Mostra as tasks em andamento, a serem feitas, e concluídas. A
              gamificação ajuda na motivação para concluir todas as etapas.
            </p>
          </div>
        </div>
      </section>

    <!-- Corpo -->
    <main class="topic fade-in">
      <!-- Seção de Avaliações -->
      <section class="topic" id="avaliacoes-section">
        <h1>Avaliações dos Usuários</h1>
        <div class="avaliacoes-container">
          <?php if (!empty($avaliacoes)): ?>
            <?php foreach ($avaliacoes as $avaliacao): ?>
              <div class="avaliacao-card">
                <h3><?php echo htmlspecialchars($avaliacao['nome']); ?></h3>
                <p>"<?php echo htmlspecialchars($avaliacao['mensagem']); ?>"</p>
              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <p>Nenhuma avaliação encontrada.</p>
          <?php endif; ?>
        </div>
      </section>
    </main>
    
    <!-- Rodapé -->
    <footer>
      <div class="footer-content">
        <div class="footer-about">
          <h2>Sobre o TaskXP</h2>
          <p>
            TaskXP é uma plataforma inovadora de gerenciamento de tarefas que
            utiliza gamificação para tornar a organização de tarefas mais
            divertida e eficiente.
          </p>
        </div>
        <div class="footer-contact">
          <h2>Contato</h2>
          <p>Email: contato@taskxp.com</p>
          <p>Telefone: (21) 1234-5678</p>
        </div>
        <div class="footer-social">
          <h2>Siga-nos</h2>
          <a href="https://facebook.com/taskxp" target="_blank">Facebook</a> |
          <a href="https://twitter.com/taskxp" target="_blank">Twitter</a> |
          <a href="https://instagram.com/taskxp" target="_blank">Instagram</a>
        </div>
      </div>
      <div class="footer-bottom">
        <p>Razão Social: TaskXP LTDA - CNPJ: 00.000.000/0001-00</p>
        <p>
          © <time>2024</time> - Todos direitos reservados a TaskXP - Feito com
          <i data-lucide="heart" class="heart"></i> por
          <a href="https://github.com/Kalebe-Nascimento"
            >Kalebe do Nascimento Sousa</a
          >
          & <a href="https://github.com/savinoo">Lucas Lorezo Savino</a>.
        </p>
      </div>
    </footer>

    <!-- ICONS -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
      lucide.createIcons();
    </script>
    <script src="script-index.js"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  </body>

  
</html>
