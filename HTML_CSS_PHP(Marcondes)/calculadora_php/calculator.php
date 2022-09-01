<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <?php   
        session_start();
        if (!isset($_SESSION['visor'])) 
        {
            $_SESSION['visor'] = ""; 
        }
        if (!isset($_POST['CE']))
        {
            session_destroy();
        }
    ?>
</head>
<body>
    <table border=1>
        <tr>
            <td colspan="4">
                <input type="text" value="<?php echo $_SESSION['visor'];?>">
            </td>
        </tr>
        <tr>
            <td ><input type="submit" name="opCE" value="CE" name="CE"></td>
            <td><input type="submit" name="opC" value="C"></td>
            <td><input type="submit" name="opDelete" value="⌫"></td>
            <td><input type="submit" name="opDivide" value="/"></td>
        </tr>
        <tr>
            <td><input type="submit" name="n7" value="7" oncliclk="<?php $_SESSION['visor'] = $_SESSION['visor'].'7' ?>"></td>
            <td><input type="submit" name="n8" value="8" oncliclk="<?php $_SESSION['visor'] = $_SESSION['visor'].'8' ?>"></td>
            <td><input type="submit" name="n9" value="9" oncliclk="<?php $_SESSION['visor'] = $_SESSION['visor'].'9' ?>"></td>
            <td><input type="submit" name="opTimes" value="X"></td>
        </tr>
        <tr>
            <td><input type="submit" name="n4" value="4" oncliclk="<?php $_SESSION['visor'] = $_SESSION['visor'].'4' ?>"></td>
            <td><input type="submit" name="n5" value="5" oncliclk="<?php $_SESSION['visor'] = $_SESSION['visor'].'5' ?>"></td>
            <td><input type="submit" name="n6" value="6" oncliclk="<?php $_SESSION['visor'] = $_SESSION['visor'].'6' ?>"></td>
            <td><input type="submit" name="opMinus" value="-"></td>
        </tr>
        <tr>
            <td><input type="submit" name="n1" value="1" oncliclk="<?php $_SESSION['visor'] = $_SESSION['visor'].'1' ?>"></td>
            <td><input type="submit" name="n2" value="2" oncliclk="<?php $_SESSION['visor'] = $_SESSION['visor'].'2' ?>"></td>
            <td><input type="submit" name="n2" value="3" oncliclk="<?php $_SESSION['visor'] = $_SESSION['visor'].'3' ?>"></td>
            <td><input type="submit" name="opPlus" value="+"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="n0" value="0" oncliclk="<?php $_SESSION['visor'] = $_SESSION['visor'].'0' ?>"></td>
            <td><input type="submit" name="opDot" value=","></td>
            <td><input type="submit" name="opEqual" value="="></td>
        </tr>
    </table>
</body>
</html>