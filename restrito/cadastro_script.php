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
</nav>

<main>
  <div class="container">
    <div class="row">
      <?php
      include_once 'conexao.php';

      $nome = mysqli_real_escape_string($conn, $_POST['nome']);
      $cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
      $cnh = mysqli_real_escape_string($conn, $_POST['cnh']);
      $senha = mysqli_real_escape_string($conn, $_POST['senha']);
      $endereco = mysqli_real_escape_string($conn, $_POST['endereco']);
      $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
      $carro = mysqli_real_escape_string($conn, $_POST['carro']);
      $empresa = mysqli_real_escape_string($conn, $_POST['empresa']);


      $senha = md5($senha);

      $sql = "INSERT INTO usuarios (nome, cpf, cnh, endereco, telefone, carro, empresa, senha) VALUES ('$nome','$cpf', '$cnh','$endereco','$telefone','$carro', '$empresa', '$senha')";
      if (mysqli_query($conn, $sql)) {
        mensagem("$nome cadastrado com sucesso!", 'success');
      } else {
        mensagem("$nome NÃO cadastrado!", 'danger');
      }

      ?>
    </div>
  </div>
</main>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>