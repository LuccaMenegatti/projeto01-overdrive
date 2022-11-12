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
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/icons/icone-logo.png">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Perfil Usuário</title>
</head>

<body>
  <?php



