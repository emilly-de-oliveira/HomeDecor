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

<body>
  <header>
    <div class="container-justify-content-center bg bg-light">
      <nav class="navbar navbar-expand-lg bg bg-light">
        <div class="container-fluid">
          <a href="../Index.php"><img src="../imagens/DECOR.png" width="140px"></a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent"
            style="text-align: center; align-items: center;">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="sobre.php"> <img
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
      <hr>
  </header>

  <br><br>
  <main class="container">
    <!-- Slide ou carrosel-->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active justify-content-center">
          <div class="row d-flex justify-content-center">
            <div class="col-auto">
              <img src="../imagens/pirapora.png" alt="...">
            </div>
          </div>
        </div>
      </div>
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">

          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div><br> <br>


    <div class="container-justify-content-center">
      <div class="container p-4 pb-0">
        <div class="row d-flex justify-content-center">
          <div class="col-auto">
            <div id="somos">
              <h3 class="text-center" style="font-family: sans-serif;"> Qual é a nossa missão?</h3>
            </div> <br><br>
            <div class="card-group justify-content" style="width: 50rem; height: 30rem">
              <div class=" card text-center justify-content-center">
                <div class="card-body">
                  <br><br><br><br>
                  <p class="card-text">Nós, da HomeDecor, temos a missão e o comprometimento com todos, de manter nossa
                    qualidade em nossos produtos para manter seu lar lindo e organizado, mas além disso, de preservar o
                    meio ambiente! Todas as nossas peças são feitas de forma ecológica, e todas as nossas embalagens são
                    recicladas. Reutilizamos caixas e as transformamos em embalagens, para transportar as encomendas.
                    Com todo o amor e carinho por você e pela natureza!</p>
                </div>
              </div>
              <div class="card">
                <img src="../imagens/epa.png" class="card-img-top" alt="...">
              </div>
            </div>
          </div>
        </div>
      </div>


  </main>

  <br> <br>

  <?php
include "estrutura/rodape.php";?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
</body>

</html>