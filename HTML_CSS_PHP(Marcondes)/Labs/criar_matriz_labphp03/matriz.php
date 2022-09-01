<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>matriz</title>
</head>
<body>
    <?php
        $array;

        for ($i=0; $i < 10; $i++)
        { 
            for ($i2=0; $i2 < 4; $i2++)
            { 
                $array[$i][$i2] = rand(0, 100);
            }
        }
        echo "<table>";
        for ($i=0; $i < 10; $i++)
        { 
            echo "<tr>";
            for ($i2=0; $i2 < 4; $i2++)
            {   
                echo "<td>".$array[$i][$i2]."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>