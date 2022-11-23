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

  <title>Pesquisar Empresa</title>

  <style>

form.branco{
  background-color: white;
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
    <a href="index.php"> Voltar</a>
    <a href="pesquisar_empresa.php"> <i class="material-icons">search</i> Empresas</a>
    <a href="pesquisa.php"><i class="material-icons">search</i> Usuarios</a>
</nav>

  <?php

  $pesquisa = $_POST['busca'] ?? ''; 

  include_once 'conexao.php';

  $sql = "SELECT * FROM company WHERE nome LIKE '%$pesquisa%'";

  $dados = mysqli_query($conn, $sql);

  ?>


<main>
  <div class="container">
    <div class="row">
      <div class="col">

        <div id="divBusca">
            <form class="d-flex" action="pesquisar_empresa.php" method="POST">
              <input class="form-control me-2" type="search" placeholder="Buscar empresa..." aria-label="Search" name="busca" id="txtBusca" autofocus>
              <button class="botao1" type="submit"><i class="material-icons">search</i></button>
            </form>
          </div>

        <!-- -=-=-=-=-=-=-=-=-=- TABELA -=-=-=-=-=-=-=-=-=- -->
        <div class="table">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Nome Fantasia</th>
              <th scope="col">CNPJ</th>
              <th scope="col">Endereço</th>
              <th scope="col">Telefone</th>
              <th scope="col">Responsavel</th>
              <th scope="col">Funções</th>
            </tr>
          </thead>
          <tbody>
            <?php

            while ($linha = mysqli_fetch_assoc($dados)) {
              $cod_company = $linha['cod_company'];
              $nome = $linha['nome'];
              $nome_fantasia = $linha['nome_fantasia'];
              $cnpj = $linha['cnpj'];
              $endereco = $linha['endereco'];
              $telefone = $linha['telefone'];
              $responsavel = $linha['responsavel'];
              $sql_responsavel = "SELECT * FROM user_adm";
              $exec = mysqli_query($conn, $sql_responsavel);
            ?>

              <tr>
                <th scope='row'><?php echo $nome ?></th>
                <td><?php echo $nome_fantasia ?></td>
                <td><?php echo $cnpj ?></td>
                <td><?php echo $endereco ?></td>
                <td><?php echo $telefone ?></td>
                <td><?php echo $responsavel?></td>
                <td width=150px>
                  <a href='cadastro_empresa_edit.php?id=<?php echo $cod_company ?>' class='botao3'>Editar</a>
                  <a href='#' class='botao4' data-bs-toggle='modal' data-bs-target='#confirma' onclick="<?php echo "pegar_dados('$nome', '$cod_company')" ?>">Excluir</a>
                </td>
              </tr>
             
              
              <div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Confirmação</h5>
                    </div>
                    <div class="modal-body">
                      <form class="branco" action="excluir_empresa_script.php" method="POST">
                        <p>Tem certeza que quer Excluir essa Empresa?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="botao3" data-bs-dismiss="modal">Não</button>
                      <input type="hidden" name="nome" id="nome_empre_1" value="<?= $nome_fantasia ?>" />
                      <input type="hidden" name="id" id="cod_company" value="<?php echo $cod_company ?>" />
                      <input type="submit" class="botao4" value="Sim">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    function pegar_dados(nome, cod_company) {

  
      document.getElementById('nome').value = nome;
      document.getElementById('cod_company').value = cod_company;
      
    }
  </script>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </main>
</body>
</html>