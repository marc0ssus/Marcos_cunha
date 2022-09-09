<?php
include_once('lib/conexao.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Salvar interessados</title>
</head>
<body class="container">
    <h1>Salvar Interessados News Letter</h1>
<?php

function Valida($valores) {
    $msg = "";
    $valido = true;
    if (empty($valores['nome'])) {
        $msg = "Nome Inválido";
        $valido = false;
    } elseif (!filter_var($valores['email'], FILTER_VALIDATE_EMAIL)) {
        $msg = "E-mail Inválido";
        $valido = false;
    } elseif (!preg_match("/^(?:(?:\+|00)?(55)\s?)?(?:\(?([1-9][0-9])\)?\s?)?(?:((?:9\d|[2-9])\d{3})\-?(\d{4}))$/",$valores['fone'])) {
        $msg = "Fone Inválido";
        $valido = false;
    } elseif ($valores['estado']=='00') {
        $msg = "Selecione o Estado";
        $valido = false;
    } elseif ($valores['cidade']=='00') {     
        $msg = "Selecione a Cidade";
        $valido = false;
    }   
    echo "<h3>".$msg."</h3>";
   return $valido;
}

if (isset($_POST['bGravar'])) {
    $valores = array("email"  => $_POST['iEmail'],
                     "nome"   => $_POST['iNome'],
                     "fone"   => $_POST['iFone'],
                     "estado" => $_POST['sEstado'],
                     "cidade" => $_POST['sCidade']);
                    
    if (Valida($valores)) {
        try {
            $sql = "INSERT into interessados(email,nome,fone,estado,cidade) 
                    values (:email,:nome,:fone,:estado,:cidade)";
            $consulta = $conn->prepare($sql);
            $consulta->execute($valores);
            echo "<br><h2>Dados Salvos!!!</h2><br>";
            echo "E-mail: ".$valores['email']."<br>";
            echo "Nome: ".$valores['nome']."<br>";
            echo "Fone: ".$valores['fone']."<br>";
       } catch(PDOException $e) {
           echo 'ERROR: ' . $e->getMessage() . "<br>";
       }
    }
}
?>
<br>
<button type="button" onclick="JavaScript:location.assign('index.php');window.clearTimeout();" class="btn btn-primary">Voltar</button>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>

