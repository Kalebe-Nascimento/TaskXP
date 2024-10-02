<?php
  session_start();

  if (!$_SESSION['user']) {
    header('Refresh:0 , url=/');
    exit();
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../global.css" />
  <link rel="stylesheet" href="dashboard.css" />
  <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon" />
  <title>TaskXP - Dashboard</title>
</head>
<body>
  <aside>
    <img src="../assets/logo.png" alt="TaskXP" class="logo" />
  </aside>
  
  <main>
    <h1><?php echo $_SESSION['user']['name']; ?>, seja bem-vindo ao TaskXP!</h1>
    <p>Você possui <strong><?php echo $_SESSION['user']['taskcoins']; ?></strong> TaskCoins!</p>
    
    <!-- Botão para gerenciar tarefas -->
    <a href="tasks" class="button">Gerenciar Tarefas</a>

    <!-- Formulário para logout -->
    <form action="../logout" method="post">
      <button type="submit">Sair</button>
    </form>
  </main>
</body>
</html>
