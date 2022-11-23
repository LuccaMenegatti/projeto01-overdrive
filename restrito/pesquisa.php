<?php include "../validar.php" ?>


<?php
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
  <link rel="stylesheet" href="estilo_restrito/media-querie2.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Pesquisar Usuarios</title>
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

  <?php

  $pesquisa = $_POST['busca'] ?? '';

  include_once 'conexao.php';

  $sql = "SELECT * FROM usuarios WHERE nome LIKE '%$pesquisa%'";

  $dados = mysqli_query($conn, $sql);

  ?>

<main>
  <div class="container">
    <div class="row">
      <div class="col">
      
      <form class="d-flex" action="pesquisa.php" method="POST">
        <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search" name="busca" autofocus>
        <button class="botao1" type="submit"><i class="material-icons">search</i></button>
      </form>

        <!-- -=-=-=-=-=-=-=-=-=- TABELA -=-=-=-=-=-=-=-=-=- -->
        <div class="table">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">CPF</th>
              <th scope="col">CNH</th>
              <th scope="col">Endereço</th>
              <th scope="col">Telefone</th>
              <th scope="col">Carro</th>
              <th scope="col">Empresa</th>
              <th scope="col">Funções</th>
            </tr>
          </thead>
          <!-- -=-=-=-=-=-=-=-=-=- PUXANDO OS DADOS DO BANCO -=-=-=-=-=-=-=-=-=- -->
          <tbody>

            <?php

            while ($linha = mysqli_fetch_assoc($dados)) {
              $cod_pessoa = $linha['cod_pessoa'];
              $nome = $linha['nome'];
              $cpf = $linha['cpf'];
              $cnh = $linha['cnh'];
              $endereco = $linha['endereco'];
              $telefone = $linha['telefone'];
              $carro = $linha['carro'];
              $empresa = $linha['empresa'];

              echo "<tr>
                    <th scope='row'>$nome</th>
                    <td>$cpf</td>
                    <td>$cnh</td>
                    <td>$endereco</td>
                    <td>$telefone</td>
                    <td>$carro</td>
                    <td>$empresa</td>
                    
                    <td width=150px>
                      <a href='cadastro_edit.php?id=$cod_pessoa' class='botao3'>Editar</a>
                      <a href='#' class='botao4' data-bs-toggle='modal' data-bs-target='#confirma' onclick=" . '"' . "pegar_dados('$cod_pessoa', '$nome')" . '"' . ">Excluir</a>
                    </td>
                </tr>";
            }
            ?>

          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirmação de exclusão</h5>

        </div>
        <div class="modal-body">
          <form action="excluir_script.php" method="POST">
            <p>Tem certeza que quer Excluir o usuário <b id="nome_pessoa">Nome da pessoa</b>?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="botao3" data-bs-dismiss="modal">Não</button>
          <input type="hidden" name="nome" id="nome_pessoa_1" value="" />
          <input type="hidden" name="id" id="cod_pessoa" value="" />
          <input type="submit" class="botao4" value="Sim">
          </form>
        </div>
      </div>
    </div>
  </div>
</main>

  <script type="text/javascript">
    function pegar_dados(id, nome) {
      document.getElementById('nome_pessoa').innerHTML = nome;
      document.getElementById('nome_pessoa_1').value = nome;
      document.getElementById('cod_pessoa').value = id;
    }
  </script>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>