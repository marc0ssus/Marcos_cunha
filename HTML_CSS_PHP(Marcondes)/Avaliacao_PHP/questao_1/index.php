<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1)</title>
</head>
<body>
    <h2>Questão 1)</h2>
    <form action="">
        <input type="number" name="valor1">
        <br><br>
        <input type="number" name="valor2">
        <br><br>
        <input type="number" name="valor3">
        <br><br>
        <input type="submit" value="Somar">
    </form>
    <?php
    if (isset($_GET["valor1"]) && isset($_GET["valor2"]) && isset($_GET["valor3"])) {
       $var1 = $_GET["valor1"];
        $var2 = $_GET["valor2"];
        $var3 = $_GET["valor3"];
        
        $resultado = $var1 + $var2 + $var3;

        if ($var1 > 10) {
            echo "<h1 style=\"color: blue;\">$resultado</h1>";
        }
         else if ($var2 < $var3) {
            echo "<h1 style=\"color: green;\">$resultado</h1>";
        }
        else if ($var3 < $var1) {
            echo "<h1 style=\"color: red;\">$resultado</h1>";
        }
        else {
            echo "<h1>$resultado</h1>";
        }
    }   
    ?>
</body>
</html>