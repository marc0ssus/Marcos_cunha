<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form session</title>
    <?php
        session_start();

        if (isset($_POST['Enviar']))
        {
            $_SESSION['nome'] = $_POST['nome'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['tele'] = $_POST['tele'];
        }
        else
        {
            $_SESSION['nome'] = "";
            $_SESSION['email'] = "";
            $_SESSION['tele'] = "";
        }
    ?>
</head>
<body>
    <form method="post">
        Nome: <br>
        <input type="text" name="nome" value="<?php echo $_SESSION['nome'];?>">
        <br> Email: <br>
        <input type="text" name="email" value="<?php echo $_SESSION['email'];?>">
        <br> Telefone: <br>
        <input type="text" name="tele" value="<?php echo $_SESSION['tele'];?>">
        <br> <br>
        <input type="submit" name="Enviar" value="Enviar">
    </form>
    <fieldset>
        <?php
            if (isset($_POST['Enviar']))
            {
                echo $_SESSION['nome'];
                echo "<br>";
                echo $_SESSION['email'];
                echo "<br>";
                echo $_SESSION['tele'];               
            }    
        ?>
    </fieldset>
</body>
</html>