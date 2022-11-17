<?php include "../validar.php" ?>
<?php
  include_once 'conexao.php';
  include 'acesso.php';
  $id_usuario = $_SESSION['cod_usuario'];
    if(Acesso::validaUsuario($id_usuario) == true) {
      header("location: index.php");
    }
?>

<!doctype html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="estilos/style.css">
    <title>Perfil</title>
</head>
<body>

  <?php
      $user_code = $_SESSION['cod_usuario'];
      $sql = "SELECT * FROM usuarios WHERE cod_pessoa = $user_code";
      $usuario = mysqli_query($conn, $sql);
      $usuario = mysqli_fetch_assoc($usuario);
  ?>

  <nav> 
      <div class="logo">
        <img src="../imagens/logo.png" class="logo" alt="Logo Overdrive">
      </div>
  </nav>


  <main>

  <section id="table">
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
            </tr>
          </thead>

          <!-- -=-=-=-=-=-=-=-=-=- PUXANDO OS DADOS DO BANCO -=-=-=-=-=-=-=-=-=- -->
          <tbody>
          <tr>
            <th scope='row'><?= $usuario['nome'] ?></th>
              <td><?= $usuario['cpf'] ?></td>
              <td><?= $usuario['cnh'] ?></td>
              <td><?= $usuario['telefone'] ?></td>
              <td><?= $usuario['endereco'] ?></td>
              <td><?= $usuario['carro'] ?></td>
              <td><?= $usuario['empresa'] ?></td>
            </tr>
          </tbody>
        </table>
  </section>

        
  <div id="botao"> 
        <a href="../logout.php" class="btn btn-danger">Logout</a>
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

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>