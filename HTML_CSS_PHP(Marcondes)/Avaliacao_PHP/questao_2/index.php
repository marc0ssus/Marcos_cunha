<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2)</title>
</head>
<body>
    <h2>Questão 2)</h2>
    <form action="">
        <input type="number" name="num">
        <br><br>
        <input type="submit" value="Verificar">
    </form>
    <?php
    if (isset($_GET["num"])) {
        $num = $_GET["num"];

        if ($num % 2 == 0) {
            echo "<h1>Numero é divisivel por 2</h1>";
        }
        else {
            echo "<h1>Numero NÃO é divisivel por 2</h1>";
        }
    }
    ?>
</body>
</html>