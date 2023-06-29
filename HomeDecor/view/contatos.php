<?php
include_once '../controller/ContatoController.php';

//session_start();

$contato = new ContatoController();

if (!empty($_POST)) {

  if (empty($_POST['id'])) {

    $contato->salvar($_POST);
  } else {
    $contato->atualizar($_POST);
  }

  header("location: " . $_SESSION['url']);

}
if (!empty($_GET['id'])) {
  $data = $contato->buscar($_GET['id']);
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
          <a href="../Index.php"><img src="../imagens/DECOR.png" width="140px"></a>
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
          <a class="nav-link" href="#comunicacao" style="color: black"> Comunicação </a>
        </li>
        <li class="nav-item" style="margin-left: 100px">
          <a class="nav-link" href="#formulario" style="color: black"> Contato</a>
        </li>
        <li class="nav-item" style="margin-left: 100px">
          <a class="nav-link" href="#mapa" style="color: black"> Mapa</a>
        </li>

      </ul>
    </div>
  </div>


  <main class="container"> <br>

  <div class="p-4 p-md-5 mb-4 carousel slide" style="background-color: rgb(240, 240, 240);">
      <!-- Slide ou carrosel-->
      <div class="col-md-12 px-0">
        <h1 class="display-7"> Quer falar com a gente? </h1>
        <p class="lead"> Envie sua mensagem para podermos conversar! </p>
        <p class="lead" style="font-size: 17px;"><a href="#formulario" class="text-black"> Contatar </a></p>
      </div>
    </div>

    <!--Cards-->

    <div class="row" id="comunicacao">
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card text-center">
          <div class="card-body">
            <img src="https://cdn-icons-png.flaticon.com/512/3178/3178158.png" width="50px" style="margin-bottom: 10px">
            <h5 class="card-title">E-mail</h5>
            <p class="card-text">Tem alguma dúvida? <br> Nos contate através do e-mail: </p>
            <h6 class="card-subtitle mb-2 text-body-secondary"> home_decor@gmail.com</h6>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card text-center">
          <div class="card-body">
            <img src="https://cdn-icons-png.flaticon.com/512/1384/1384015.png" width="50px" style="margin-bottom: 10px">
            <h5 class="card-title">Instagram</h5>
            <p class="card-text">Confira nossos posts e novidades no momento do lançamento! </p>
            <h6 class="card-subtitle mb-2 text-body-secondary"> @home_decor</h6>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card text-center">
          <div class="card-body">
            <img src=" https://cdn-icons-png.flaticon.com/512/1384/1384007.png" width="50px"
              style="margin-bottom: 10px">
            <h5 class="card-title">Whatsapp</h5>
            <p class="card-text"> Mande uma mensagem e converse diretamente com um de nossos atendentes! </p>
            <h6 class="card-subtitle mb-2 text-body-secondary"> (49) 98899-9988</h6>
          </div>
        </div>
      </div>
    </div>


    <!--Formulário de contato-->
    <br><br>
    <hr> <br>
    <div id="formulario">
      <h3 class="h3"> Contato</h3>
    </div>
    <p style="color:red;">
        <?php echo (!empty($_SESSION["msg"]) ? $_SESSION["msg"] : "") ?>
    </p>
    <div class="card" style="padding:20px; margin-top: 20px">
      <form action="contatos.php" method="post" class="row g-3">
        <div class="col-md-6">
        <input type="hidden" name="id" value="<?php echo (!empty($data->id) ? $data->id : "") ?>" />
        <label for="nome" class="form-label" >Nome</label>
        <input class="form-control" id="nome" type="text" name="nome" value="<?php echo (!empty($data->nome) ? $data->nome : "") ?>"><br>
        </div>

        <div class="col-md-6">
        <label for="sobrenome" class="form-label">Sobrenome</label>
            <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="<?php echo (!empty($data->sobrenome) ? $data->sobrenome : "") ?>"><br>
        </div>

        <div class="col-12">
        <label for="email" class="form-label">Email</label>
        <input class="form-control" id="email" placeholder="nome@gmail.com" type="text" name="email" value="<?php echo (!empty($data->email) ? $data->email : "") ?>"><br>
        </div>

        <div class="col-12">
          <label for="ajuda" class="form-label">Como podemos ajudar?</label>
          <textarea type="text" id="ajuda" class="form-control" name="ajuda" aria-label="With textarea" value="<?php echo (!empty($data->ajuda) ? $data->ajuda : "") ?>"></textarea>
        </div>

        <div class="col-12">
          <button type="submit" class="btn btn-secondary"><?php echo (empty($_GET['id']) ? "Salvar" : "Atualizar") ?>
        </button>
         
        </div>
      </form>
    </div>


    <!--Mapa-->

    <br><br>
    <hr><br>
    <div id="mapa">
      <h3 class="h3"> Localização</h3>
    </div> <br>

    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
      src="https://www.openstreetmap.org/export/embed.html?bbox=-52.628835439682014%2C-27.071646167867605%2C-52.6247262954712%2C-27.06877056820736&amp;layer=mapnik&amp;marker=-27.070208377257348%2C-52.6267808675766"
      style="border: 1px solid rgb(136, 136, 136); border-radius: 5px;"></iframe><br />
    <small>
      <a href="https://www.openstreetmap.org/?mlat=-27.07021&amp;mlon=-52.62678#map=18/-27.07021/-52.62678"
        style="color: black">
        Ver mapa ampliado</a>
    </small>
  </main>

  <?php include "./estrutura/rodape.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
</body>

</html>