<?php
include '../controller/LoginController.php';

session_start();
$login = new LoginController();


if (!empty($_POST)) {

    $login->salvar($_POST);
    $_SESSION['dados'] = "";
    header("location: " . $_SESSION['url']);
}
$dados = !empty($_SESSION['dados']) ? $_SESSION['dados'] : "";
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Home decor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet">
</head>

<!--Cabeçalho da página: navbar -->

<body>
  <div class="container-justify-content-center">
    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a href="perfil.php"><img src="../imagens/DECOR.png" width="140px"></a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="login.php"> <img
                    src="https://cdn-icons-png.flaticon.com/512/3114/3114883.png" width="30px"> </a>
              </li>

            </ul>
            <form class="d-flex" role="search" style="margin-right: 30px">
              <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Search">
              <button class="btn btn-outline-secondary" type="submit"> <img
                  src="https://cdn-icons-png.flaticon.com/512/54/54481.png" width="15px"></button>
            </form>
          </div>
        </div>
      </nav>
    </header>

    <br><br>
  <main id="formulario" class="container"> <br>
    <!--Cards-->

    <div class="row" id="login">
      <div class="col-sm-12 mb-3 mb-sm-0">
        <div class="card text-center">
          <div class="card-body"><br>
            <img src="../imagens/login.png" width="50px" style="margin-bottom: 10px">
            <h4>Registre uma conta</h4>
            <form action="RegistrarUsuarioForm.php" method="post">
            <p style="color:red;">
            <?php echo (!empty($_SESSION["msg"]) ? $_SESSION["msg"] : "") ?>
            </p>
            <label for="">Nome</label>
            <input type="text" style="width:200px" name="nome" value="<?php echo (!empty($dados['nome']) ? $dados['nome'] : "") ?>"><br><br>

            <label for="">Email</label>
            <input type="text" style="width:200px" name="email" value="<?php echo (!empty($dados['email']) ? $dados['email'] : "") ?>"><br><br>

            <label for="">Telefone</label>
            <input type="text" style="width:180px" name="telefone" value="<?php echo (!empty($dados['telefone']) ? $dados['telefone'] : "") ?>"><br><br>

            <label for="">Login</label>
            <input type="text" style="width:200px" name="login" value="<?php echo (!empty($dados['login']) ? $dados['login'] : "") ?>" ><br><br>

            <label for="">Senha</label>
            <input type="password" style="width:200px" name="senha"><br><br>

            <label for="">Confirmar Senha</label>
            <input type="password" style="width:120px" name="c_senha"><br><br><br>
            <button class="btn btn-secondary btn-sm" type="submit" href="perfil.php">Cadastrar</button>
            <button class="btn btn-secondary btn-sm"><a href="login.php" style="color:white; text-decoration: none">Voltar</a></button>
        </form>
             <br>
          </div>
        </div>
    </div>
</div>

      <br><br><br>
  </div>
  </main>
  

  <?php include "estrutura/rodape.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
</body>

</html>