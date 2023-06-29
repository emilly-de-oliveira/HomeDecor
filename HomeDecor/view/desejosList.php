<?php
    include '../controller/DesejosController.php';


    $desejos = new DesejosController();

    if(!empty($_GET['id'])){
        $desejos->deletar($_GET['id']);
        header("location: desejosList.php");
        $_SESSION["msg"] = "Deletado com sucesso!";
    }

    if(!empty($_POST)){
       $load = $desejos->pesquisar($_POST);
    } else {
       $load = $desejos->carregar();
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
          <a href="perfil.php"><img src="../imagens/DECOR.png" width="140px"></a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="desejos.php"> <img
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
    </div>

    <br><br>
 
      <h3 class="h3"> Lista de desejos registradas</h3>
    <p style="color:red;">
        <?php echo (!empty($_SESSION["msg"]) ? $_SESSION["msg"] : "") ?>
    </p>
    <a>
    <div class="card" style="padding:20px; margin-top: 20px">
      <form action="desejosList.php" method="post" class="row g-3">
        <div class="col-md-6">
        <select class="btn btn btn-secondary btn-sm dropdown-toggle" name="campo">
        <option value="nomeLista">Nome da lista</option>
        <option value="tipo">Tipo da lista</option>
        <option value="qtdItens">Quantidade de itens</option>
        <option value="descricaoItems">Descrição dos itens</option>
        <option value="email">Email</option>
        <option value="endereco">Endereço</option>
    </select>
    <input class="input input-sm mb-3" type="text" name="valor" placeholder="Pesquisar" />
    <button type="submit" class="btn btn-secondary btn-sm">Buscar</button>
    <button type="submit" class="btn btn-secondary btn-sm"><a href="desejos.php" style="color:white; text-decoration:none">Cadastrar</button></a><br><br></div>
</form>

</div>
<table id="Table" class="table table-bordered">
	
		<tr>
		<th>Nome da lista</th>
        <th>Tipo da lista</th>
        <th>Quantidade de itens</th>
        <th>Descrição dos itens</th>
        <th>Email</th>
        <th>Endereço</th>												
		</tr>
	
    <?php
        foreach($load as $item){
            echo "<tr>";
                echo "<td>".$item->nomeLista."</td>";
                echo "<td>".$item->tipo."</td>";
                echo "<td>".$item->qtdItens."</td>";
                echo "<td>".$item->descricaoItems."</td>";
                echo "<td>".$item->email."</td>";
                echo "<td>".$item->endereco."</td>";
                echo "<td><a href='desejos.php?id=$item->id'>Editar</a></td>";
                echo "<td><a onclick='return confirm(\"Deseja Excluir? \")' href='desejosList.php?id=$item->id'>Deletar</a></td>";
            echo "<tr>";
        }
    ?>
	
</table>
<br><br> 

<?php
include "estrutura/rodape.php";?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>

        </body>
        </html>