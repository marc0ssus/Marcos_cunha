<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>meu_commerce</title>
</head>
<body>
    <div class="">
        <div class="row">
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                 <?php include 'menu_nav.php'; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <?php include 'menu_categorias.php'; ?>
            </div>
            <div class="col-9">
                <?php if (isset($_GET['pagina'])) {
                    if ($_GET['pagina'] == 'produto') {
                        include 'produtos/listagem.php';
                    }
                    if ($_GET['pagina'] == 'produto') {
                        include 'produtos/detalhe.php';
                    }
                    } else {
                        //include 'produtos_destaque.php';
                    } 
                ?>
            </div>
        </div>
        <div class="row" style="background-color: #ccc;">
            #meu_commerce_2022
        </div>
    </div>
</body>
</html>