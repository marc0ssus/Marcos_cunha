<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>matriz tabela</title>
    <?php
    $valores[0][0] = "maco";
    $valores[0][1] = 6.70;
    $valores[0][2] = 9;
    $valores[1][0] = "fernando";
    $valores[1][1] = 3.80;
    $valores[1][2] = 6;
    ?>
</head>
<body>
        <table border="3">
            <tr>
                <td>Nome</td>
                <td>Valor</td>
                <td>Quantidade</td>
                <td>Total</td>
            </tr>
            <?php    
                for ($i=0; $i < count($valores); $i++)
                {
                    echo "<tr>";
                    for ($i2=0; $i2 < 3; $i2++)
                    { 
                        echo "<td>".$valores[$i][$i2]."</td>";
                    }
                    $total = $valores[$i][2] * $valores[$i][1];
                    echo "<td>".$total."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
</body>
</html>