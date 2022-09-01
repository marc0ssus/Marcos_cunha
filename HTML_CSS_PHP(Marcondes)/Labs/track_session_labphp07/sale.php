<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="session_track.php">
    <title>PROMOÇÃO!!!</title>
    <?php
        session_start();
        $c;
        
        if ($_GET['c'] == "SMS") 
        {
            $_SESSION['sms'] +=1;
        }
        else if ($_GET['c'] == "Email")
        {
            $_SESSION['email'] +=1;
        }
    ?>
</head>
<body>
    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">100% de desconto corra agora aa</a>
</body>
</html>