<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Cabeçalho padrão -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro - TaskXP</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Fontes e estilos -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;400;600&family=Montserrat:wght@700&display=swap"
      rel="stylesheet"
    />
  </head>


  
  <body class="cadastro-page">
    <!-- Cabeçalho -->
    <header>
      <figure>
        <img src="./assets/logo.png" alt="Logo TaskXP" class="logo" />
      </figure>
      <nav class="menu">
        <ul>
          <li><a href="index.html">Início</a></li>
          <li><a href="cadastrar-se.html">Cadastrar-se</a></li>
          <li><a href="contato.html">Contato</a></li>
        </ul>
      </nav>
    </header>

    <!-- Corpo -->
    <main class="topic fade-in">
      <form action="">
        <h1>Cadastro</h1>
        <div>
          <label for="name">Nome</label>
          <input
            type="text"
            name="name"
            id="name"
            placeholder="Digite seu nome"
            required
          />

        <div>
          <label for="email">Email</label>
          <input
            type="email"
            name="email"
            id="email"
            placeholder="Seu melhor email"
            required
          />
        </div>

        <div>
          <label for="pass">Senha</label>
          <input
            type="password"
            name="pass"
            id="pass"
            placeholder="Sua melhor senha"
            required
            pattern=".{6,}"
          />
        </div>
        <!-- Campo de confirmação de senha -->
        <div>
          <label for="confirm-pass">Confirme sua Senha</label>
          <input
            type="password"
            name="confirm-pass"
            id="confirm-pass"
            placeholder="Confirme sua senha"
            required
            pattern=".{6,}"  
          />
        </div>
        <button type="submit">Cadastrar-se</button>
      </form>
    </main>

    <!-- Rodapé -->
    <footer>
      <div>
        <p>Razão Social: TaskXP LTDA - CNPJ: 00.000.000/0001-00</p>
      </div>
      <p>
        © <time>2024</time> - Todos direitos reservados a TaskXP - Feito com
        <i data-lucide="heart" class="heart"></i> por
        <a href="https://github.com/Kalebe-Nascimento"
          >Kalebe do Nascimento Sousa</a
        >
        & <a href="https://github.com/savinoo">Lucas Lorezo Savino</a>.
      </p>
    </footer>

    <!-- ICONS -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
      lucide.createIcons();
    </script>
    <script src="script.js"></script>
  </body>
</html>
