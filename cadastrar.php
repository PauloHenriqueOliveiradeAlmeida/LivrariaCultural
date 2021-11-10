<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar</title>
</head>
<body>
    <?php
        include_once("index.php");
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form action="sistema.php" method="post">
                     <h1>Cadastro de Livros</h1>
                     <input type="hidden" name="tipo" value="incluir">
                     
                     <div class="mb-3">
                         <label for="titulo" class="form-label">Titulo</label>
                         <input type="text" name="titulo" id="autor" class="form-control">
                     </div>
                     
                     <div class="mb-3">
                         <label for="autor" class="form-label">Autor</label>
                         <input type="text" name="autor" id="autor" class="form-control">
                     </div>
                     
                     <div class="mb-3">
                         <label for="pagina" class="form-label">Paginas</label>
                         <input type="number" name="paginas" id="paginas" min="1" class="form-control">
                     </div>
                     
                     <input type="submit" class="btn btn-primary" value="Cadastrar">
                </form>
            </div>
        </div>
    </div>
</body>
</html>