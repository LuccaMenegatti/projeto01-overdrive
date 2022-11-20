<?php
include "../validar.php";
require_once "conexao.php";
require_once "acesso.php";
$sql_nome = "SELECT nome FROM user_adm WHERE id_usuario = $userid";
$exec_nome = mysqli_query($conn, $sql_nome);
$pegar_nome = mysqli_fetch_assoc($exec_nome);

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
  <title>Admin</title>
</head>

<body>

<header>
      <div class="logo">
        <img src="../imagens/logo.png" class="logo" alt="Logo Overdrive">
      </div>
</header>
<nav>
    <a href="../logout.php">Sair</a>
    <a href="pesquisar_empresa.php">Empresas</a>
    <a href="pesquisa.php">Usuarios</a>
</nav>

<main>

            <h1>Primero Projeto Overdrive</h1>
            
            <p> Bem vindo, <?php echo $pegar_nome['nome'] ?> esse é o projeto CRUD, focados em 
             cadastro de usuarios e empresas. Você é o Admin deste sistema, portanto tem acesso a operações como 
             cadastrar, excluir, e editar usuarios e empresas, faça bom proveito de seus beneficios!</p>

            <a href="cadastro_empresa.php">Cadastrar Empresa</a>
            <a href="cadastro.php">Cadastrar Usuários</a>
           
          </div>
   

</main>
</body>
</html>