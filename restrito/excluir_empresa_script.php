<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="estilo_restrito/styleindex.css">
  <link rel="stylesheet" href="estilo_restrito/media-querie2.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Exclusão de Empresa</title>

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
    <a href="pesquisar_empresa.php"> Voltar</a>
</nav>
<main>
  <div class="container">
    <div class="row">
      <?php
      include_once 'conexao.php';

      $id = $_POST['id'];

      // obtem o nome do a ser excluido.
      $getName = "SELECT nome_fantasia FROM company WHERE cod_company = $id";
      $actualName = mysqli_query($conn, $getName);
      $nome_to_remove = mysqli_fetch_assoc($actualName);

      $nome_to_remove = $nome_to_remove['nome_fantasia'];

            // deleta
            $sql = "DELETE FROM company WHERE cod_company = $id";

            if (mysqli_query($conn, $sql)) {
              mensagem("$nome_to_remove excluido com sucesso!", 'success');
            } else {
              mensagem("$nome_to_remove NÃO excluido!", 'danger');
            }
            

      ?>
    </div>
  </div>
</main>







  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>