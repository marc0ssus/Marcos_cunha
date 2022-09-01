<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
</head>
<body>
    <table border="1", align="center" width=90%>
        <tr>
            <td colspan="2" align="center" heigth="100px" bgcolor="lightgray" >
                Aula Web - Dev T.I.
            </td>
        </tr>
        <tr>
            <td heigth="400px" width="200px" align="center" valing="top">
                <?php
                    include "menu.php";
                ?>
            </td>
            <td valing="top">
                <?php
                    if (isset($_GET['pagina'])) {
                        if (file_exists($_GET['pagina'].".php")) {
                            include $_GET['pagina'].".php";
                        }else {
                            include "404.php";
                        }
                    } else {
                        include "corpo.php";
                    }                   
                ?>
            </td>
        <tr>
            <td align="center" colspan="2" bgcolor="lightgray" colspan="2" >
                2022 - Curso T.I.
            </td>
        </tr>
    </table>
</body>
</html>