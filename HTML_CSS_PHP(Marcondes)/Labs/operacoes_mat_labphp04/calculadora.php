<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <?php
    $v1 = $_GET["v1"];
    $v2 = $_GET["v2"];
    $op = $_GET["op"];
    $result;
    ?>
    <?php
    function calculator($v1, $v2, $op)
    {
        if ($op == 'soma')
        {
            $result = $v1 + $v2;
        }
        if ($op == 'sub')
        {
            $result = $v1 - $v2;
        }
        if ($op == 'mult')
        {
            $result = $v1 * $v2;
        }
        if ($op == 'div')
        {
            $result = $v1 / $v2;
        }
        return $result;
    }
    ?>
</head>
<body>
    <?php
    $result = calculator($v1, $v2, $op);
    echo "O resultado de ".$v1." ".$op." ".$v2." é ".$result;
    ?>
</body>
</html>