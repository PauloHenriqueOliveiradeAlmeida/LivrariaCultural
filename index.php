<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Livraria Cultural</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <figure>
                    <img src="imagens/topo.jpg" alt="" class="figure-img img-fluid">
                </figure>
            </div>
        </div>
		<hr>
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page">Home</a></li>
                            <li class="nav-item"><a href="cadastrar.php" class="nav-link">Cadastrar</a></li>
                            <li class="nav-item"><a href="consultar.php" class="nav-link">Consultar</a></li>
                        </ul>
                        <form action="" class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                            <button type="submit" class="btn btn-outline-success">Pesquisar</button>
                        </form>
                    </div>
                </nav>
            </div>
            <?php
                if (isset($_GET["msg"])) {
					echo "<h3><i>" . $_GET["msg"] . "</i></h3>";
					include_once("exibir.php");
                }
            ?>
        </div>
    </div>
</body>
</html>