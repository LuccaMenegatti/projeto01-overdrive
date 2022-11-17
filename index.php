<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="estilos/StyleLogin.css">
    <link rel="stylesheet" href="estilos/media-querie.css">
    <title>CRUD - Overdrive</title>
</head>
<body>
    <main>
        <section id="login">
            <div id="formulario">
                <div class="logo">
                    <img src="imagens/logo.png" class="logo" alt="Logo Overdrive">
                </div>
                <p>Seja bem vindo(a) ao projeto CRUD, insira seus dados para continuar:</p>
                <form action="index.php" method="post" autocomplete="on">
                    <div class="campo">
                        <i class="material-icons">person</i>
                        <input type="text" name="login" id="login" placeholder="Insira seu login de ADM" 
                         required maxlength="30"> 
                        <label for="login">Login</label>
                    </div>
                    <div class="campo">
                        <i class="material-icons">vpn_key</i>
                        <input type="password" name="senha" id="senha" placeholder="Insira sua senha" 
                        autocomplete="current-password" > 
                        <label for="senha">Senha</label>
                    </div>
                    <input type="submit" value="Entrar"> 
                    <a href="login_user.php" class="botao">Logar como Usuario</a>
                </form>
            </div>
        </section>
    </main>
    <!-- -=-=-=-=-=-=-=-=-=- VALIDAÇÃO DE CONTA -=-=-=-=-=-=-=-=-=--->

    <?php
            if (isset($_POST['login'])) {
              $login = $_POST['login'];
              $senha = $_POST['senha'];

              include_once "restrito/conexao.php";
              $sql = "SELECT * from user_adm WHERE login = '$login' AND senha = '$senha'";

              if ($result = mysqli_query($conn, $sql)) {
                $num_registros = mysqli_num_rows($result);
                if ($num_registros == 1) {
                  $linha = mysqli_fetch_assoc($result);


                  if (($login == $linha['login']) and ($senha == $linha['senha'])) {
                    session_start();
                    $_SESSION['cod_usuario'] = $linha["id_usuario"];
                    header("location: restrito/index.php");
                  } else {
                    echo "Login Invalido";
                  }
                } else {
                  echo "Login ou senha não encontrados ou Invalido!";
                }
              } else {
                echo "Nenhum resultado do Banco de Dados";
              }
            }
            ?>
</body>
</html>

