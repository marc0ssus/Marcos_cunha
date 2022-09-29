<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5)</title>
</head>
<body>
    <h2>Questão 5)</h2>
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
    $total = 8654.00;
    switch ($_GET["opcoes"]) {
        case "24 vezes":
            $total += $total * 0.02;
            break;
        case "36 vezes":
            $total += $total * 0.02;
            for ($i = 0; $i < 36 - 24; $i++) {
                $total += $total * 0.003;
            }
            break;
        case "48 vezes":
            $total += $total * 0.02;
            for ($i = 0; $i < 48 - 24; $i++) {
                $total += $total * 0.003;
            }
            break;
        case "60 vezes":
            $total += $total * 0.02;
            for ($i = 0; $i < 60 - 24; $i++) {
                $total += $total * 0.003;
            }
            break;
    }
    echo "<br>Preço: ";
    echo $total;
    }
    ?>
</body>
</html>