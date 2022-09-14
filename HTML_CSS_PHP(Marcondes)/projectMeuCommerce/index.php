<?php
session_start();

include_once "lib/conexao.php";
include_once "lib/sql.php";
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>MeuCommerce Project</title>
    </head>

    <body>
        <div>
            <?php include "home.php"; ?>
            <div>
                <?php
                if (!isset($_GET["pagina"])) {
                  include "produtos/listagem.php";
                }
                if (isset($_GET["pagina"]) && $_GET["pagina"] == "produto") {
                  include "produtos/produto.php";
                }
                ?>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

</html>