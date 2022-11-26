<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="estilo_restrito/styleindex.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Alteração de Cadastro</title>
</head>

<body>

<header>
      <div class="logo">
        <img src="../imagens/logo.png" class="logo" alt="Logo Overdrive">
      </div>
</header>
<nav>
    <a href="pesquisa.php"> Voltar</a>
</nav>

  <?php

  include_once 'conexao.php';

  $id = $_GET['id'] ?? '';
  $sql = "SELECT * FROM usuarios WHERE cod_pessoa = $id";

  $dados = mysqli_query($conn, $sql);
  $linha = mysqli_fetch_assoc($dados);

  ?>

<main>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Cadastro Usuário</h1>
        <form action="edit_script.php" method="POST">
          <div class="mb-3">
            <label for="nome">Nome completo:</label>
            <input type="text" class="form-control" name="nome" required value="<?php echo $linha['nome']; ?>">
          </div>
          <div class="mb-3">
            <label>CPF:</label>
            <input type="text" class="form-control" name="cpf" required value="<?php echo $linha['cpf']; ?>">
          </div>
          <div class="mb-3">
            <label>CNH:</label>
            <input type="text" class="form-control" name="cnh" required value="<?php echo $linha['cnh']; ?>">
          </div>
          <div class="mb-3">
            <label>Endereço:</label>
            <input type="text" class="form-control" name="endereco" required value="<?php echo $linha['endereco']; ?>">
          </div>
          <div class="mb-3">
            <label>Telefone:</label>
            <input type="text" class="form-control" name="telefone" required value="<?php echo $linha['telefone']; ?>">
          </div>
          <div class="mb-3">
            <label>Carro:</label>
            <input type="text" class="form-control" name="carro" required value="<?php echo $linha['carro']; ?>">
          </div>
          <div class="mb-3">
            <label>Empresa:</label>
            <input type="text" class="form-control" name="empresa" required value="<?php echo $linha['empresa']; ?>">
          </div>
          <div class="mb-3">
          </div>
          <div class="mb-3">
            <input type="submit" class="botao6" value="Salvar Alterações">
            <input type="hidden" name="id" value="<?php echo $linha['cod_pessoa']; ?>">
          </div>
        </form>
      </div>
    </div>
  </div>
</main>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>