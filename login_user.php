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
    <title>Usuario</title>
</head>
<body>
    <main>
        <section id="login">
            <div id="formulario">
                <div class="logo">
                    <img src="imagens/logo.png" class="logo" alt="Logo Overdrive">
                </div>
                <p>Seja bem vindo(a) ao projeto CRUD, insira seus dados para continuar:</p>
                <form action="login_controller.php" method="post" autocomplete="on">
                    <div class="campo">
                        <i class="material-icons">person</i>
                        <input type="text" name="login" id="login" placeholder="Insira seu CPF" 
                         required maxlength="30"> 
                        <label for="login">CPF</label>
                    </div>
                    <div class="campo">
                        <i class="material-icons">vpn_key</i>
                        <input type="password" name="senha" id="senha" placeholder="Insira sua senha" 
                        autocomplete="current-password" > 
                        <label for="senha">Senha</label>
                    </div>
                    <input type="submit" value="Entrar"> 
                    <a href="index.php" class="botao">Logar como adm</a>
                </form>
            </div>
        </section>
    </main>
</body>
</html>

