<?php
include_once '../controller/OuvidoriaController.php';
include "estrutura/header.php";

$ouvidoria = new OuvidoriaController();

if (!empty($_POST)) {
  if (empty($_POST['id'])) {
    $ouvidoria->salvar($_POST);
  } else {
    $ouvidoria->atualizar($_POST);
  }
  header("location: " . $_SESSION['url']);
}
if (!empty($_GET['id'])) {
  $data = $ouvidoria->buscar($_GET['id']);
}
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
          <a href="../Index.php"> <img src="../imagens/DECOR.png" width="140px"> </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

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

    <!--nav com links para sessões da própria página -->
    <div class="nav-scroller py-3 mb-2">
      <ul class="nav nav-underline flex nav-fill">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Início</a>
        </li>
        <li class="nav-item" style="margin-left: 100px">
          <a class="nav-link" href="#formulario" style="color: black"> Ouvidoria </a>
        </li>

      </ul>
    </div>
  </div>


  <main class="container"> <br>

  <div class="p-4 p-md-5 mb-4 carousel slide" style="background-color: rgb(240, 240, 240);">
      <!-- Slide ou carrosel-->
      <div class="col-md-12 px-0">
        <h1 class="display-7"> Ouvidoria </h1>
        <p class="lead"> Queremos ouvir você! </p>
        <p class="lead"> Deixe sua mensagem, sugestão, reclamação ou elogio no espaço abaixo. </p>
      </div>
    </div>

   
    <!--Formulário de ouvidoria-->
    <br>
    <hr> <br>
    <div id="formulario">
      <h3 class="h3"> Ouvidoria</h3>
    </div>
    <p style="color:red;">
        <?php echo (!empty($_SESSION["msg"]) ? $_SESSION["msg"] : "") ?>
    </p>

    <div class="card" style="padding:20px; margin-top: 20px">
    <form action="ouvidoria.php" method="post" class="row g-3">
        <div class="col-12">
          <input type="hidden" name="id" value="<?php echo (!empty($data->id) ? $data->id : "") ?>" />

          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" placeholder="nome@gmail.com" name="email" value="<?php echo (!empty($data->email) ? $data->email : "") ?>"><br>        
        </div>

        <div class="col-12">
          <label for="assunto" class="form-label">Assunto</label>
          <input type="text" class="form-control" id="assunto" name="assunto" value="<?php echo (!empty($data->assunto) ? $data->assunto : "") ?>"><br>        
        </div>

        <div class="col-12">
          <label for="sugestao" class="form-label">Sugestão/Reclamação </label>
          <input type="text" class="form-control" id="sugestao" name="sugestao" value="<?php echo (!empty($data->sugestao) ? $data->sugestao : "") ?>"><br>        
        </div>

        <div class="col-12">
          <label for="observacao" class="form-label">Observação </label>
          <input type="text" class="form-control" id="observacao" name="observacao" value="<?php echo (!empty($data->observacao) ? $data->observacao : "") ?>"><br>        
        </div>

        <div class="col-12">
          <button type="submit" class="btn btn-secondary"><?php echo (empty($_GET['id']) ? "Salvar" : "Atualizar") ?>
        </button>
        </div>
      </form>
    </div>
    <br><br>

    <?php
include "estrutura/rodape.php";?>
 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
</body>

</html>