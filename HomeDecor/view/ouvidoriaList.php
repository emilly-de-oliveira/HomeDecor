<?php
    include '../controller/OuvidoriaController.php';

    $ouvidoria = new OuvidoriaController();

    if(!empty($_GET['id'])){
        $ouvidoria->deletar($_GET['id']);
        header("location: ouvidoriaList.php");
        $_SESSION["msg"] = "Registro Deletado com sucesso!";
    }

    if(!empty($_POST)){
       $load = $ouvidoria->pesquisar($_POST);
    } else {
       $load = $ouvidoria->carregar();
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
          <a href="../Index.php"><img src="../imagens/DECOR.png" width="140px"></a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="ouvidoria.php"> <img
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
    
    <br><br>
    <div id="formulario">
      <h3 class="h3"> Registros da ouvidoria</h3>
    </div>
    </header>
    <p style="color:red;">
        <?php echo (!empty($_SESSION["msg"]) ? $_SESSION["msg"] : "") ?>
    </p>
    <a>
    <div class="card" style="padding:20px; margin-top: 20px">
      <form action="ouvidoriaList.php" method="post" class="row g-3">
        <div class="col-md-6">
        <select class="btn btn btn-secondary btn-sm dropdown-toggle" name="campo">
        <option value="email">E-mail</option>
        <option value="assunto">Assunto</option>
        <option value="sugestao">Sugestão</option>
        <option value="observacao">Observação</option>
    </select>
    <input class="input input-sm mb-3" type="text" name="valor" placeholder="Pesquisar" />
    <button type="submit" class="btn btn-secondary btn-sm">Buscar</button>
    <button type="submit" class="btn btn-secondary btn-sm"><a href="ouvidoria.php" style="color: white">Cadastrar</button></a><br><br></div>
</form>
</div>
</div>
<table id="Table" class="table table-bordered">
	<thead>
		<tr>
            <th>E-mail</th>
            <th>Assunto</th>
            <th>Sugestão</th>
            <th>Observação</th>										
		</tr>
	</thead>
	<tbody>
    <?php
        foreach($load as $item){
            echo "<tr>";
                echo "<td>".$item->email."</td>";
                echo "<td>".$item->assunto."</td>";
                echo "<td>".$item->sugestao."</td>";
                echo "<td>".$item->observacao."</td>";
                 echo "<td><a href='ouvidoria.php?id=$item->id'>Editar</a></td>";
                echo "<td><a onclick='return confirm(\"Deseja Excluir? \")' href='ouvidoriaList.php?id=$item->id'>Deletar</a></td>";
            echo "<tr>";
        }
    ?>
	</tbody>
</table>
<br><br> 

<?php
include "estrutura/rodape.php";?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>

        </body>
        </html>