<?php include "../validar.php" ?>
<?php
  include_once 'conexao.php';
  include 'acesso.php';
  $id_usuario = $_SESSION['cod_usuario'];
    if(Acesso::validaUsuario($id_usuario) == true) {
      header("location: index.php");
    }
?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="estilo_restrito/styleindex.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Perfil</title>
</head>
<body>

  <?php
      $user_code = $_SESSION['cod_usuario'];
      $sql = "SELECT * FROM usuarios";
      $usuario = mysqli_query($conn, $sql);
      $usuario = mysqli_fetch_assoc($usuario);
  ?>

  <header> 
      <div class="logo">
        <img src="../imagens/logo.png" class="logo" alt="Logo Overdrive">
      </div>
  </header>
  <nav>

  <a href="../logout.php">Encerrar Sessão</a>

</nav>


  <main>
        <section id="table">
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
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $dados = mysqli_query($conn, $sql);

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
                      </tr>";
                  }
                  ?>
            
                </tbody>
              </table>
                </div>
        </section>            
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