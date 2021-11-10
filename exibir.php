<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .title-table {
            font-weight: bold;
        }
    </style>
    <title>Exibir Livros</title>
</head>
<body>
    <div class="container">
        <?php 
            include_once("conexao.php");

            try {
                $consulta = $con->query("SELECT * FROM tb_livros");
        ?>
        <h1>Livros Cadastrados</h1>
        <table class="table-striped table">
            <tr class="title-table">
                <td>Título</td>
                <td>Autor</td>
                <td>Páginas</td>
                <td>Ações</td>
            </tr>

        <?php
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <tr>
                <td><?php echo $linha["nome_livro"] ?></td>
                <td><?php echo $linha["autor_livro"] ?></td>
                <td><?php echo $linha["pagina_livro"] ?></td>
                <td>
                    <a href=<?php echo "editar.php?id_livro=" . $linha["id_livro"] ?> >Editar</a>
                    -
                    <a href=<?php echo "excluir.php?id_livro=" . $linha["id_livro"] ?> >Excluir</a>
                </td>
            </tr>

        <?php
            }
        ?>
        </table>
        <?php
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        ?>
    </div>
</body>
</html>