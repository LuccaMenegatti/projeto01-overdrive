<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="restrito/images/icons/icone-logo.png">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Empresa</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col mb-6">
        <div class="card mb-3">
          <img src="restrito/images/logo2.png" class="card-img-top" alt="IMAGEM NÃO ENCONTRADA!" style="background-color: #58151c;">
          <div class="card-body">
            <h5 class="card-title">Login Usuário</h5>
            <!--  -->
            <form method="POST" action="login_controller.php">
              <div id="emailHelp" class="form-text">Entre com seu CPF e senha:</div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">CPF</label>
                <input type="text" class="form-control" id="login" name="login">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha">
              </div>
              <button type="submit" class="btn btn-primary">Acessar</button>

              <a href="index.php" class="btn btn-info">Voltar</a>
            </form>
            <!--  -->
          </div>
        </div>
      </div>
    </div>
  </div>






  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>