<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sale.php">
    <title>php07</title>
    <?php
        session_start();
        if (isset($_POST['Reset']))
        {
            session_destroy();    
        }

        if (!isset($_SESSION['sms']))
        {
            $_SESSION['sms'] = 0;
        }
        if (!isset($_SESSION['email']))
        {
            $_SESSION['email'] = 0;
        }

    ?>
</head>
<body>
    <?php
        echo "SMS links: ".$_SESSION['sms'];
        echo "<br>";
        echo "Email links: ".$_SESSION['email'];
    ?>
    <br><br><br>
    <input type="submit" value="Reset" name="Reset">
</body>
</html>