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

    <div class="nav-scroller py-3 mb-2">
      <ul class="nav nav-underline flex nav-fill">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#collapseOne" style="color: black"> Casa e decoração </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#collapseTwo" style="color: black"> Cama e banho</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#collapseThree" style="color: black"> Mesa posta</a>
        </li>
      </ul>
    </div>
  </div>


  <main class="container">
    <!-- Slide ou carrosel-->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active justify-content-center">
          <div class="row d-flex justify-content-center">
            <div class="col-auto">
              <img src="../imagens/colecao.png" alt="...">
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
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" 0
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div> <br> <br>

      <!--accordion-->
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
              aria-expanded="true" aria-controls="collapseOne">
              Promoções em itens de casa e decoração
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">

              <!--cards-->
              <div class="card-group" width="67rem">
                <div class="card text-center">
                  <img src="../imagens/ilu.jpg" class="card-img-top" alt="..." height="300px">
                  <div class="card-body">
                    <h5 class="card-title">Luminárias</h5>
                    <p class="card-text">Venha conferir as promoções para luminárias da HomeDecor para transformar a
                      iluminação da sua casa, com até 5% de desconto no PIX ou boleto ou 7x sem juros no cartão de
                      crédito.</p>
                    <a href="#" class="btn btn-primary">Ver detalhes</a>
                  </div>
                </div>

                <div class="card text-center">
                  <img src="/imagens/esp.jpg" class="card-img-top" alt="..." height="300px">
                  <div class="card-body">
                    <h5 class="card-title">Espelhos</h5>
                    <p class="card-text">Venha conferir as melhores promoções dos melhores espelhos na HomeDecor, com
                      até
                      10% de desconto
                      no PIX ou boleto e 5x sem juros no cartão de crédito.</p>
                    <a href="#" class="btn btn-primary">Ver detalhes</a>
                  </div>
                </div>

                <div class="card text-center">
                  <img src="/imagens/qua.jpg" class="card-img-top" alt="..." height="300px">
                  <div class="card-body">
                    <h5 class="card-title">Quadros</h5>
                    <p class="card-text">Venha conferir as promoções em quadros da HomeDecor, para
                      transformar a decoração da sua casa, com até 5% de desconto no PIX ou boleto ou 10x sem juros no
                      cartão de crédito.</p>
                    <a href="#" class="btn btn-primary">Ver detalhes</a>
                  </div>
                </div>

                <div class="card text-center">
                  <img src="/imagens/mov.jpg" class="card-img-top" alt="..." height="300px">
                  <div class="card-body">
                    <h5 class="card-title">Móveis</h5>
                    <p class="card-text">Venha conferir as promoções para os móveis da sua casa, junto com a
                      HomeDecor! Com até 5% de desconto no PIX ou boleto ou 7x sem juros no cartão de crédito.</p>
                    <a href="#" class="btn btn-primary">Ver detalhes</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Promoções em itens de cama e banho
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">

              <div class="card-group" width="67rem">
                <div class="card text-center">
                  <img src="/imagens/kit.jpg" class="card-img-top" alt="..." height="300px">
                  <div class="card-body">
                    <h5 class="card-title">Kit de cama</h5>
                    <p class="card-text">Venha conferir as promoções para kits de cama da HomeDecor para transformar os
                      quartos da sua casa, com até 5% de desconto no PIX ou boleto ou 7x sem juros no cartão de
                      crédito.</p>
                    <a href="#" class="btn btn-primary">Ver detalhes</a>
                  </div>
                </div>

                <div class="card text-center">
                  <img src="/imagens/ros.jpg" class="card-img-top" alt="..." height="300px">
                  <div class="card-body">
                    <h5 class="card-title">Toalhas de rosto</h5>
                    <p class="card-text">Venha conferir as melhores promoções nas mais macias toalhas de rosto, aqui na
                      HomeDecor! com até
                      10% de desconto
                      no PIX ou boleto e 5x sem juros no cartão de crédito.</p>
                    <a href="#" class="btn btn-primary">Ver detalhes</a>
                  </div>
                </div>

                <div class="card text-center">
                  <img src="/imagens/col.jpg" class="card-img-top" alt="..." height="300px">
                  <div class="card-body">
                    <h5 class="card-title">Colchas</h5>
                    <p class="card-text">Venha conferir as promoções em colchas na HomeDecor, para
                      transformar a sua cama, com até 5% de desconto no PIX ou boleto ou 10x sem juros no
                      cartão de crédito.</p>
                    <a href="#" class="btn btn-primary">Ver detalhes</a>
                  </div>
                </div>

                <div class="card text-center">
                  <img src="/imagens/ban.png" class="card-img-top" alt="..." height="300px">
                  <div class="card-body">
                    <h5 class="card-title">Toalhas de banho</h5>
                    <p class="card-text">Venha conferir as promoções para as toalhas de banho da sua casa, junto com a
                      HomeDecor! Com até 5% de desconto no PIX ou boleto ou 7x sem juros no cartão de crédito.</p>
                    <a href="#" class="btn btn-primary">Ver detalhes</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Promoções em itens de mesa posta
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">

              <div class="card-group" width="67rem">
                <div class="card text-center">
                  <img src="/imagens/tacas.jpg" class="card-img-top" alt="..." height="300px">
                  <div class="card-body">
                    <h5 class="card-title">Taças</h5>
                    <p class="card-text">Venha conferir as promoções para as melhores taças na HomeDecor, e assim
                      transformar a
                      mesa da sua família! Com até 5% de desconto no PIX ou boleto ou 7x sem juros no cartão de
                      crédito.</p>
                    <a href="#" class="btn btn-primary">Ver detalhes</a>
                  </div>
                </div>

                <div class="card text-center">
                  <img src="/imagens/loucas.jpg" class="card-img-top" alt="..." height="300px">
                  <div class="card-body">
                    <h5 class="card-title">Louças</h5>
                    <p class="card-text">Venha conferir as melhores promoções em louças na HomeDecor, com até
                      10% de desconto
                      no PIX ou boleto e 5x sem juros no cartão de crédito. Tudo na maior qualidade para sua mesa posta!
                    </p>
                    <a href="#" class="btn btn-primary">Ver detalhes</a>
                  </div>
                </div>

                <div class="card text-center">
                  <img src="/imagens/eletros.jpg" class="card-img-top" alt="..." height="300px">
                  <div class="card-body">
                    <h5 class="card-title">Eletrodomésticos</h5>
                    <p class="card-text">Venha conferir as promoções em eletrodomésticos da HomeDecor, para
                      transformar a sua casa, com até 5% de desconto no PIX ou boleto ou 10x sem juros no
                      cartão de crédito.</p>
                    <a href="#" class="btn btn-primary">Ver detalhes</a>
                  </div>
                </div>

                <div class="card text-center">
                  <img src="/imagens/Ecco.jpg" class="card-img-top" alt="..." height="300px">
                  <div class="card-body">
                    <h5 class="card-title">Talheres</h5>
                    <p class="card-text">Venha conferir as melhores promoções em jogos de talheres na HomeDecor, direto
                      para a sua casa! Com até 5%
                      de desconto no PIX ou no boleto e 7x sem juros no cartão de crédito. Além de descontos em cupons!
                    </p>
                    <a href="#" class="btn btn-primary">Ver detalhes</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  </main> <br> <br><br> <br>


  <?php
include "estrutura/rodape.php";?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
</body>

</html>