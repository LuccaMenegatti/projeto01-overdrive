<?php

session_start();
include_once 'conexao.php';

?>


<!doctype html>

<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="estilo_restrito/styleindex.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Cadastro Empresa</title>

  <style>

    body, html{
      color: white;
    }

  </style>
</head>

<body>

<header>
      <div class="logo">
        <img src="../imagens/logo.png" class="logo" alt="Logo Overdrive">
      </div>
</header>
<nav>
   
</nav>


<main>
  <div class="container">
    <div class="row">
      <?php 

      if (isset($_POST['Cadastrar'])) {

        $nome = mysqli_real_escape_string($conn, $_POST['nome']);
        $nome_fantasia = mysqli_real_escape_string($conn, $_POST['nome_fantasia']);
        $cnpj = mysqli_real_escape_string($conn, $_POST['cnpj']);
        $endereco = mysqli_real_escape_string($conn, $_POST['endereco']);
        $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
        $responsavel = mysqli_real_escape_string($conn, $_POST['responsavel']);

        $sql_query_to_insert = "INSERT INTO company (nome, nome_fantasia, cnpj, endereco, telefone, responsavel) VALUES ('$nome', '$nome_fantasia', '$cnpj', '$endereco', '$telefone', '$responsavel')";

        $sql_insert = mysqli_query($conn, $sql_query_to_insert);

        if ($sql_insert) {
          mensagem("Empresa cadastrada com sucesso!", 'success');
        } else {
          mensagem("Empresa NÃO cadastrada!", 'danger');
        }
      }


      if (isset($_POST['editar'])) {
        $nome = mysqli_real_escape_string($conn, $_POST['nome']);
        $nome_fantasia = mysqli_real_escape_string($conn, $_POST['nome_fantasia']);
        $cnpj = mysqli_real_escape_string($conn, $_POST['cnpj']);
        $endereco = mysqli_real_escape_string($conn, $_POST['endereco']);
        $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
        $responsavel = mysqli_real_escape_string($conn, $_POST['responsavel']);

        $sql = "UPDATE company SET nome = '$nome', nome_fantasia = '$nome_fantasia', cnpj = '$cnpj', endereco = '$endereco', telefone = '$telefone', responsavel = '$responsavel' WHERE cod_company = $_POST[id]";

        if (mysqli_query($conn, $sql)) {
          mensagem("Empresa atualizada com sucesso!", 'success');
        } else {
          mensagem("Empresa NÃO cadastrada!", 'danger');
        }
      }
      ?>
      <a href="index.php" class="botao1">Voltar</a>
    </div>
  </div>
</main>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>