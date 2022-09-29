<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3)</title>
</head>
<body>
    <h2>Questão 3)</h2>
    <form action="">
        R$/Kg Maça<input type="number" value="0.00" name="maca_preco">
        <br><br>
        R$/Kg Melancia<input type="number" value="0.00" name="melancia_preco">
        <br><br>
        R$/Kg Laranja<input type="number" value="0.00" name="laranja_preco">
        <br><br>
        R$/Kg Repolho<input type="number" value="0.00" name="repolho_preco">
        <br><br>
        R$/Kg Cenoura<input type="number" value="0.00" name="cenoura_preco">
        <br><br>
        R$/Kg Batatinha<input type="number" value="0.00" name="batatinha_preco">
        <br><br>
        <hr style="background-color:gray;height:3px;width:20%;text-align:left;margin-left:0">
        <br>
        Kg Maça<input type="number" value="0.00" name="maca_kg">
        <br><br>
        Kg Melancia<input type="number" value="0.00" name="melancia_kg">
        <br><br>
        Kg Laranja<input type="number" value="0.00" name="laranja_kg">
        <br><br>
        Kg Repolho<input type="number" value="0.00" name="repolho_kg">
        <br><br>
        Kg Cenoura<input type="number" value="0.00" name="cenoura_kg">
        <br><br>
        Kg Batatinha<input type="number" value="0.00" name="batatinha_kg">
        <br><br><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if (isset($_GET["maca_preco"]) && isset($_GET["melancia_preco"]) && isset($_GET["laranja_preco"]) &&
        isset($_GET["repolho_preco"]) && isset($_GET["cenoura_preco"]) && isset($_GET["batatinha_preco"]) &&
        isset($_GET["maca_kg"]) && isset($_GET["melancia_kg"]) && isset($_GET["laranja_kg"]) &&
        isset($_GET["repolho_kg"]) && isset($_GET["cenoura_kg"]) && isset($_GET["batatinha_kg"])) {
        $maca_gasto = $_GET["maca_preco"] * $_GET["maca_kg"];
        $melancia_gasto = $_GET["melancia_preco"] * $_GET["melancia_kg"];
        $laranja_gasto = $_GET["laranja_preco"] * $_GET["laranja_kg"];
        $repolho_gasto = $_GET["repolho_preco"] * $_GET["repolho_kg"];
        $cenoura_gasto = $_GET["cenoura_preco"] * $_GET["cenoura_kg"];
        $batatinha_gasto = $_GET["batatinha_preco"] * $_GET["batatinha_kg"];

        $gasto = $maca_gasto + $melancia_gasto + $laranja_gasto + $repolho_gasto + $cenoura_gasto + $batatinha_gasto;
        $sobra = 50 - $gasto;

        if ($gasto > 50) {
            echo "<h1 style=\"color: red;\">Falta dinheiro</h1>";
        }
        else if ($gasto < 50) {
            echo "<h1 style=\"color: blue;\">Compra efetuada com sucesso! $sobra R$ sobrando!</h1>";
        }
        else if ($gasto == 50) {
            echo "<h1 style=\"color: green;\">Compra efetuada com sucesso!</h1>";
        }
    }
    ?>
</body>
</html>