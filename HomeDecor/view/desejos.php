<?php
include_once '../controller/DesejosController.php';
include "estrutura/header.php";
//session_start();

$desejos = new DesejosController(); 

if (!empty($_POST)) {

  if (empty($_POST['id'])) {

    $desejos->salvar($_POST);
  } else {
    $desejos->atualizar($_POST);
  }

  header("location: " . $_SESSION['url']);

}
if (!empty($_GET['id'])) {
  $data = $desejos->buscar($_GET['id']);
  //var_dump($data);
}
//passa o valor para a variavem mensagem e limpa da sessão:
/*
if(!empty($_SESSION['msg'])) {
    $msg = $_SESSION['msg'];
    unset($_SESSION['msg']);
    //var_dump($msg );
} else {
    $msg = "";
}
*/
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
                <a class="nav-link" href="perfil.php"> <img
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


  <main class="container"> <br>
    <!--Formulário de contato-->
    <br><br>
    <hr> <br>
    <div id="formulario">
      <h3 class="h3"> Cadastro de lista de desejos </h3>
    </div>
    <p style="color:red;">
        <?php echo (!empty($_SESSION["msg"]) ? $_SESSION["msg"] : "") ?>
    </p>
    <div class="card" style="padding:20px; margin-top: 20px">
      <form action="desejos.php" method="post" class="row g-3">
        <div class="col-md-6">
        <input type="hidden" name="id" value="<?php echo (!empty($data->id) ? $data->id : "") ?>" />
        <label for="nomeLista" class="form-label" >Nome da lista</label>
        <input class="form-control" id="nomeLista" type="text" name="nomeLista" value="<?php echo (!empty($data->nomeLista) ? $data->nomeLista : "") ?>"><br>
        </div>

        <div class="col-md-6">
        <label for="tipo" class="form-label">Tipo da lista</label>
            <input type="text" class="form-control" id="tipo" name="tipo" value="<?php echo (!empty($data->tipo) ? $data->tipo : "") ?>"><br>
        </div>

        <div class="col-12">
        <label for="qtdItens" class="form-label">Quantidade de itens</label>
        <input class="form-control" id="qtdItens" type="number" name="qtdItens" value="<?php echo (!empty($data->qtdItens) ? $data->qtdItens : "") ?>"><br>
        </div>
        
        <div class="col-12">
        <label for="descricaoItems" class="form-label">Descrição dos itens</label>
        <input class="form-control" id="descricaoItems" type="text" name="descricaoItems" value="<?php echo (!empty($data->descricaoItems) ? $data->descricaoItems : "") ?>"><br>
        </div>

        <div class="col-12">
        <label for="email" class="form-label">Email</label>
        <input class="form-control" id="email" placeholder="nome@gmail.com" type="text" name="email" value="<?php echo (!empty($data->email) ? $data->email : "") ?>"><br>
        </div>

        <div class="col-12">
          <label for="endereco" class="form-label">Endereço</label>
          <textarea type="text" id="endereco" class="form-control" name="endereco" aria-label="With textarea" value="<?php echo (!empty($data->endereco) ? $data->endereco : "") ?>"></textarea>
        </div>

        <div class="col-12">
          <button type="submit" class="btn btn-secondary"><?php echo (empty($_GET['id']) ? "Salvar" : "Atualizar") ?>
        </button>
        </div>
      </form>
    </div>
  </main>

  <?php include "./estrutura/rodape.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
</body>

</html>