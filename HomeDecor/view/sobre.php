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
  <div class="bg-image" style="
    background-image: url('../imagens/back.png');
    height: 100vh;
  ">
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
<br><br><br>
      <div main class=" container">
        <div class="d-grid gap-2">
        <center><a href="somos.php"><button class="btn btn-secondary" type="submit"
                style="height: 50px; width: 700px; align: center; border-radius: 15px;">Quem somos</button></a>
            <br><br>
            <a href="mis.php"><button class="btn btn-secondary" type="submit"
                style="height: 50px; width: 700px; align: center; border-radius: 15px;">Nossa missão</button></a>
            <br><br>
            <a href="trab.php"><button class="btn btn-secondary" type="submit"
            style="height: 50px; width: 700px; align: center; border-radius: 15px;">Nosso
                trabalho</button></a>
            <br><br>
            <a href="contatos.php"><button class="btn btn-secondary" type="submit"
                style="height: 50px; width: 700px; align: center; border-radius: 15px;">Contato</button></a></center>
      </div>
      </div>


      <br><br><br><br>
  </div>
  </main>
  

  <?php include "estrutura/rodape.php" ?>


</body>

</html>