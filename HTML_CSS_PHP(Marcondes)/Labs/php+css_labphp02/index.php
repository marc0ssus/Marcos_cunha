<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>matriz tabela</title>
    <?php
    $valores[0][0] = "maco";
    $valores[0][1] = 6.70;
    $valores[0][2] = 9;
    $valores[1][0] = "fernando";
    $valores[1][1] = 3.80;
    $valores[1][2] = 6;
    $valores[2][0] = "maco";
    $valores[2][1] = 6.70;
    $valores[2][2] = 9;
    $valores[3][0] = "fernando";
    $valores[3][1] = 3.80;
    $valores[3][2] = 6;
    ?>
</head>
<body>
        <table border="3">
            <tr>
                <td class="first">Nome</td>
                <td class="first">Valor</td>
                <td class="first">Quantidade</td>
                <td class="first">Total</td>
            </tr>
            <?php    
                for ($i=0; $i < count($valores); $i++)
                {
                    echo "<tr>";
                    for ($i2=0; $i2 < 3; $i2++)
                    { 
                        if ($i % 2 == 0)
                            echo "<td class=\"td1\">".$valores[$i][$i2]."</td>";
                        else
                        {
                            echo "<td class=\"td2\">".$valores[$i][$i2]."</td>";
                        }
                    }
                    $total = $valores[$i][2] * $valores[$i][1];
                    if ($i % 2 == 0)
                    {
                        echo "<td class=\"total1\">".$total."</td>";
                    }
                    else
                    {
                        echo "<td class=\"total2\">".$total."</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
</body>
</html>