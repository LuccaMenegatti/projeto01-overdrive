<?php
  session_start();
  require_once "acesso.php";
  $id_usuario = $_SESSION['cod_usuario'];
  if(Acesso::validaUsuario($id_usuario) == false) {
    header("location: perfil_usuario.php");
  }
?>

<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="estilo_restrito/styleindex.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Cadastro Usuário</title>
</head>

<body>

<header>
      <div class="logo">
        <img src="../imagens/logo.png" class="logo" alt="Logo Overdrive">
      </div>
</header>
<nav>
    <a href="index.php"> Voltar</a>
    <a href="pesquisar_empresa.php"> <i class="material-icons">search</i> Empresas</a>
    <a href="pesquisa.php"><i class="material-icons">search</i> Usuarios</a>
</nav>

<main>
  <div class="container">
    <div class="row">
      <div class="col">
        <form action="cadastro_script.php" method="POST">
          <div class="mb-3">
            <label for="nome">Nome completo:</label>
            <input type="text" class="form-control" name="nome" required>
          </div>
          <div class="mb-3">
            <label for="endereco">CPF:</label>
            <input type="text" class="form-control" name="cpf" id="cpf" required>
          </div>
          <div class="mb-3">
            <label for="telefone">CNH:</label>
            <input type="text" class="form-control" name="cnh" id="cnh" minlength="9" maxlength="9" required>
          </div>
          <div class="mb-3">
            <label for="senha">Senha:</label>
            <input type="password" class="form-control" name="senha" required>
          </div>
          <div class="mb-3">
            <label for="endereco">Endereço:</label>
            <input type="text" class="form-control" name="endereco" required>
          </div>
          <div class="mb-3">
            <label for="telefone">Telefone:</label>
            <input type="text" class="form-control" name="telefone" Id="tel" required>
          </div>
          <div class="mb-3">
            <label for="carro">Carro:</label>
            <input type="text" class="form-control" name="carro" required>
          </div>
          <div class="mb-3">
            <label for="empresa">Empresa:</label>
            <input type="text" class="form-control" name="empresa" required>
          </div>
          <div class="mb-3">
            <input type="submit" class="botao6" value="Cadastrar Usuario">
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
      $("#cpf").mask("999.999.999-99");
      $("#tel").mask("(99) 99999-9999");
  </script>
</main>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>