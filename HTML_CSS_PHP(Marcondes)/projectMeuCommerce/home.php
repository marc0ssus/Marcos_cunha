<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>meu_commerce</title>
    </head>

    <body>
        <div>
            <div class="row">
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col">
                    <?php include "menu_nav.php"; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <?php include "menu_categorias.php"; ?>
                </div>
                <div class="col-9">
                    <?php if (isset($_GET["pagina"])) {
                      if ($_GET["pagina"] == "produtos") {
                        include "produtos_home.php";
                      }
                      if ($_GET["pagina"] == "produto") {
                        include "detalhe.php";
                      }
                      if ($_GET["pagina"] == "carrinho") {
                        include "carrinho.php";
                      }
                      if ($_GET["pagina"] == "pedidos") {
                        include "pedidos.php";
                      }
                      if ($_GET["pagina"] == "finalizar_pedido") {
                        if (!isset($_SESSION["autenticado"])) {
                          include "login.php";
                        } else {
                          include "finalizar_pedido.php";
                        }
                      }
                    } else {
                      include "destaque.php";
                    } ?>
                </div>
            </div>
            <div class="row" style="background-color: #ccc;">
                #meu_commerce_2022
            </div>
        </div>
    </body>

</html>