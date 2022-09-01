<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="normalize.css">
    <title>Site</title>
</head>
<body>
<div id="site">
        <div class="topo">
            Curso Dev T.I
        </div>
        <div class="menu">
            <?php include "menu.php"; ?>
        </div>
        <div class="conteudo">
            <?php
                if (isset($_GET['pagina'])) {
                    if (file_exists($_GET['pagina'].".php")) {
                        include $_GET['pagina'].".php";
                    } else {
                        include "404.php";
                    }
                } else {
                    include "corpo.php";
                }
            ?>
        </div>
        <div class="rodape">
            Desenvolvimento Web
        </div>
    </div>
</body>
</html>