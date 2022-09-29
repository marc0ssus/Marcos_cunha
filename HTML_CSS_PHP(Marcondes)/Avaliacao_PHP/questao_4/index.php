<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4)</title>
</head>
<body>
    <h2>Questão 4)</h2>
    <form action="">
        <select name="opcoes">
            <option selected>24 vezes</option>
            <option>36 vezes</option>
            <option>48 vezes</option>
            <option>60 vezes</option>
        </select>
        <input type="submit" value="Selecionar">
    </form>
    <?php
    if (isset($_GET["opcoes"])) {
    switch ($_GET["opcoes"]) {
        case "24 vezes":
            $taxa = 0.015;
            break;
        case "36 vezes":
            $taxa = 0.02;
            break;
        case "48 vezes":
            $taxa = 0.025;
            break;
        case "60 vezes":
            $taxa = 0.03;
            break;
    }
    $preco = 8654.00 + (8654.00 * $taxa);
    echo "<br>Preço: ";
    echo $preco;
    }
    ?>
</body>
</html>