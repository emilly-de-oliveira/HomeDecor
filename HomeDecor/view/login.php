<?php
include '../controller/LoginController.php';

session_start();
$login = new LoginController();

if (!empty($_POST)) {
    $login->logar($_POST);

    $dados = "";
    header("location: " . $_SESSION['url']);
} else if (!empty($_GET['sair'])) {
    session_destroy();
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
          <a href="../Index.php"><img src="../imagens/DECOR.png" width="140px"></a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="../Index.php"> <img
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
      <div class="col-sm-12 mb-4 mb-sm-0">
        <div class="card text-center">
          <div class="card-body">
            <br>
            <img src="../imagens/login.png" width="50px" style="margin-bottom: 10px">
            <h4>Entrar na conta</h4>
            <form action="login.php" method="post">
            <p style="color:red;">
                <?php echo (!empty($_SESSION["msg"]) ? $_SESSION["msg"] : "") ?>
            </p><br>
            <label>Login</label>
            <input type="text" name="login" value="<?php echo (!empty($dados['login']) ? $dados['login'] : "") ?>" /><br>
            <br>
            <label>Senha</label>
            <input type="password" name="senha" /><br>
            <br><br>
            <button class="btn btn-secondary btn-sm" type="submit" href="perfil.php">Logar</button>
            <button class="btn btn-secondary btn-sm"><a href="RegistrarUsuarioForm.php" style="color:white; text-decoration:none">Registrar-se</a></button>
             </form>
             <br>
          </div>
        </div>
    </div>
</div>

      <br><br>
  </div>
  </main>
  

  <?php include "estrutura/rodape.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
</body>

</html>