<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrando...</title>
</head>
<body>
    <?php
        include_once("conexao.php");

        $titulo = $_POST["titulo"];
        $autor = $_POST["autor"];
        $paginas = $_POST["paginas"];
        $tipo = $_POST["tipo"];

        switch ($tipo) {
            case "incluir":
                $query=$con->prepare("INSERT INTO tb_livros (nome_livro, autor_livro, pagina_livro) values (:TITULO, :AUTOR, :PAGINAS)");

                $query ->bindParam(":TITULO", $titulo);
                $query ->bindParam(":AUTOR", $autor);
                $query ->bindParam(":PAGINAS", $paginas);

                $msg = $query->execute() ? "<p>Livro Cadastrado com Sucesso!</p>" : "<p>Erro ao Cadastrar o livro, por favor, Tente Novamente mais Tarde...</p>";
                header("location: index.php?msg=".urlencode($msg));                        
                break;

            default:
                echo "<p>Infelizmente você selecionou uma opção inválida, por favor, tente outra opção</p>";
                break;
        }
    ?>
</body>
</html>